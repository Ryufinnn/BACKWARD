/*------------------------------------------------------------------------------------------------*\
  Function:   validateFields()
  Purpose:    generic form field validation.
  Parameters: form      - the name of the form to validate
              rules - an array. Each index is a string of the form:
              
   "[if:FIELDNAME=VALUE,]REQUIREMENT,fieldname[,fieldname2],error message"
  
              if:FIELDNAME=VALUE,   This allows us to only validate a field only if a fieldname 
                       FIELDNAME has a value VALUE. This option allows for nesting; i.e. you can 
                       have multiple if clauses, separated by a comma. They will be examined in the 
                       order in which they appear in the line.

              Valid REQUIREMENT strings are: 
                "required"    - field must be filled in
                "digits_only" - field must contain digits only
                "length=X"    - field has to be X characters long
                "length=X-Y"  - field has to be between X and Y (inclusive) characters long
                "valid_email" - field has to be a valid email address
                "same_as"     - fieldname is the same as fieldname2 (for password comparison)
                "range=X-Y"   - field must be a number between the range of X and Y inclusive
                "is_alpha"    - field must only contain alphanumeric characters
  
  Comments:   With both digits_only, valid_email and is_alpha options, if the empty string is passed 
              in it won't generate an error, thus allowing validation of non-required fields. So, if 
              you want a field to be a valid email address, provide validation for both "required" 
              and "valid_email".

  For a demonstration of this script, go to benjaminkeen.com.

  This script is written by Ben Keen (www.benjaminkeen.com). It is free to
  distribute, to re-write - to do what ever you want with it. A short email 
  saying that you're using it is always appreciated! :-)

  Before using it, please read the following disclaimer. 

  THIS SOFTWARE IS PROVIDED ON AN "AS-IS" BASIS WITHOUT WARRANTY OF ANY KIND. 
  BENJAMINKEEN.COM SPECIFICALLY DISCLAIMS ANY OTHER WARRANTY, EXPRESS OR IMPLIED, 
  INCLUDING ANY WARRANTY OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE. 
  IN NO EVENT SHALL BENJAMINKEEN.COM BE LIABLE FOR ANY CONSEQUENTIAL, INDIRECT, 
  SPECIAL OR INCIDENTAL DAMAGES, EVEN IF BENJAMINKEEN.COM HAS BEEN ADVISED OF 
  THE POSSIBILITY OF SUCH POTENTIAL LOSS OR DAMAGE. USER AGREES TO HOLD 
  BENJAMINKEEN.COM HARMLESS FROM AND AGAINST ANY AND ALL CLAIMS, LOSSES, 
  LIABILITIES AND EXPENSES.
                
\*------------------------------------------------------------------------------------------------*/
function validateFields(form, rules)
{
  // loop through rules
  for (var i=0; i<rules.length; i++)
  {
    // split row into component parts 
    var row = rules[i].split(",");

    // while the row begins with "if:..." test the condition. If true, strip the
    // if:..., part and continue evaluating the rest of the line. Keep repeating 
    // this while the line begins with an if-condition. If it fails any of the 
    // conditions, don't bother validating the rest of the line.
    var satisfiesIfConditions = true;
    while (row[0].match("^if:"))
    {
      var condition = row[0];
      condition = condition.replace("if:", "");
      var parts = condition.split("=");
      var fieldToCheck = parts[0];
      var valueToCheck = parts[1];

      // find value of FIELDNAME for conditional check
      var fieldnameValue = "";      
      if (form[fieldToCheck].type == undefined) // RADIO
      {
        for (var j=0; j<form[fieldToCheck].length; j++)
        {
          if (form[fieldToCheck][j].checked)
            fieldnameValue = form[fieldToCheck][j].value;
        }
      }
      else                    // ALL OTHER FIELD TYPES
        fieldnameValue = form[parts[0]].value;

      // if the VALUE is NOT the same, we don't need to validate this field. Return.
      if (fieldnameValue != valueToCheck)
      {
        satisfiesIfConditions = false;
        break;
      }
      else
        row.shift();    // remove this if-condition from line, and continue validating line
    }

    if (!satisfiesIfConditions)
      continue;


    var requirement = row[0];
    var fieldName   = row[1];

    if (row.length == 4)     // same_as
    {
      var fieldName2   = row[2];
      var errorMessage = row[3];
    }
    else
      var errorMessage = row[2];    // everything else!


    // if the requirement is "length=...", rename requirement to "length" for switch statement
    if (requirement.match("^length="))
    {
      var lengthRequirements = requirement;
      requirement = "length";
    }

    // if the requirement is "range=...", rename requirement to "range" for switch statement
    if (requirement.match("^range="))
    {
      var rangeRequirements = requirement;
      requirement = "range";
    }
    

    // now, validate whatever is required of the field
    switch (requirement)
    {
      case "required":
        // if radio buttons, do separate check:
        if (form[fieldName].type == undefined)
        {
          var oneIsChecked = false;
          for (var j=0; j<form[fieldName].length; j++)
          {
            if (form[fieldName][j].checked)
              oneIsChecked = true;
          }
          if (!oneIsChecked)
          {
            alertMessage(form[fieldName], errorMessage);
            return false;           
          }
        }
        // otherwise, just perform ordinary "required" check.
        else if (!form[fieldName].value)
        {         
          alertMessage(form[fieldName], errorMessage);
          return false;
        }
        break;

      case "digits_only":       
        if (form[fieldName].value && form[fieldName].value.match(/\D/))
        {
          alertMessage(form[fieldName], errorMessage);
          return false;
        }
        break;

      case "is_alpha": 
        if (form[fieldName].value && form[fieldName].value.match(/\W/))
        {
          alertMessage(form[fieldName], errorMessage);
          return false;
        }
        break;

      case "length":
        var result  = lengthRequirements.replace("length=", "");
        var range_or_exact_number = result.match(/[^_]+/);
        var fieldCount = range_or_exact_number[0].split("-");

        // if the user supplied two length fields, make sure the field is within that range
        if (fieldCount.length == 2)
        {
          if (form[fieldName].value.length < fieldCount[0] || form[fieldName].value.length > fieldCount[1])
            {
            alertMessage(form[fieldName], errorMessage);
            return false;
          }
        }

        // otherwise, check it's EXACTLY the size the user specified 
        else
        {
          if (form[fieldName].value.length != fieldCount[0])
          {
            alertMessage(form[fieldName], errorMessage);
            return false;
          }
        }       
        break;

      // this is also true if field is empty [should be same for digits_only]
      case "valid_email":
        if (form[fieldName].value && !isValidEmail(form[fieldName].value))
        {
          alertMessage(form[fieldName], errorMessage);
          return false;         
        }
        break;

      case "same_as":
        if (form[fieldName].value != form[fieldName2].value)
        {
          alertMessage(form[fieldName], errorMessage);
          return false;
        }       
        break;

      case "range":
        var result  = rangeRequirements.replace("range=", "");
        var rangeValues = result.split("-");
        
        // if the user supplied two length fields, make sure the field is within that range
        if ((form[fieldName].value < Number(rangeValues[0])) || (form[fieldName].value > Number(rangeValues[1])))
        {
          alertMessage(form[fieldName], errorMessage);
          return false;
        }
        break;

      default:
        alert("Unknown requirement flag in validateFields(): " + requirement);
        return false;
    }
  }
  
  return true;
}


/*--------------------------------------------------------------------------------------------*\
  Function: alertMessage()
  Purpose:  simple helper function which alerts a message, then focuses on and highlights 
            a particular field.
\*--------------------------------------------------------------------------------------------*/
function alertMessage(obj, message)
{ 
  var backgroundColor = "#F2F9FF";

  alert(message);

  // if "obj" is an array: it's a radio button. Focus on the first element.
  if (obj.type == undefined)
    obj[0].focus();
  else
  {
    obj.style.background = backgroundColor;
    obj.focus();
  }
  return false;
}


/*--------------------------------------------------------------------------------------------*\
  Function: isValidEmail
  Purpose:  tests a string is a valid email
\*--------------------------------------------------------------------------------------------*/
function isValidEmail(str)
{
  // trim starting / ending whitespace
  str = str.replace(/^\s*/, "");
  str = str.replace(/\s*$/, "");

  var at="@"
  var dot="."
  var lat=str.indexOf(at)
  var lstr=str.length
  var ldot=str.indexOf(dot)

  if (str.indexOf(at)==-1)
    return false
  
  if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr)
    return false
  
  if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr)
    return false

  if (str.indexOf(at,(lat+1))!=-1)
    return false

  if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot)
    return false

  if (str.indexOf(dot,(lat+2))==-1)
    return false

  if (str.indexOf(" ")!=-1)
    return false

  return true;
}
