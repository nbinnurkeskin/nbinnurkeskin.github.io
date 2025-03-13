<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Activity6 - Registration Form</title>
</head>
<body>
  <h1>Registration Form</h1>
  
  <form action="Activity6-preview.php" method="POST">
    <table>
      <tr>
        <td>Name:</td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td>Username:</td>
        <td><input type="text" name="username"></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td>Address:</td>
        <td><input type="text" name="address"></td>
      </tr>
      <tr>
        <td>Country:<br>(Please select a country)</td>
        <td>
          <select name="country">
            <option value="">Please select a country</option>
            <option value="Turkey">Italy</option>
            <option value="USA">USA</option>
            <option value="Germany">Germany</option>
            <option value="France">France</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>ZIP Code:</td>
        <td><input type="text" name="zip"></td>
      </tr>
      <tr>
        <td>Email:</td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td>Sex:</td>
        <td>
          <input type="radio" name="sex" value="Male" id="male">
          <label for="male">Male</label>
          <input type="radio" name="sex" value="Female" id="female">
          <label for="female">Female</label>
        </td>
      </tr>
      <tr>
        <td>Language:</td>
        <td>
          <input type="checkbox" name="language[]" value="English" id="eng">
          <label for="eng">English</label>
          <input type="checkbox" name="language[]" value="French" id="fr">
          <label for="fr">French</label>
          <input type="checkbox" name="language[]" value="Germany" id="ger">
          <label for="ger">Germany</label>
        </td>
      </tr>
      <tr>
        <td>About:</td>
        <td>
          <textarea name="about" rows="4" cols="30"></textarea>
        </td>
      </tr>
      <tr>
        <td>Submit:</td>
        <td>
          <input type="submit" value="Submit">
 
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
