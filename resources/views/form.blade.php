<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign up</title>
  </head>
  <body>
    <h1>Buat account Baru!</h1>

    <h3>Sign Up form</h3>
    <form action="/register" method="post">
      @csrf
      <!-- input first name  -->
      <label>First Name :</label><br>
      <input type="text" name="fname">
      <br>
      <!-- input last name -->
      <label>Last Name :</label><br>
      <input type="text" name="lname">
      <br>
      <!-- input gender -->
      <label>Gender : </label><br>
      <input type="radio" name="gender" value="male"> Male<br>
      <input type="radio" name="gender" value="female"> Female<br>
      <input type="radio" name="gender" value="other"> Other
      <br>
      <!-- input nationality -->
      <label>Nationality</label><br>
      <select name="nationality">
        <option>Indonesian</option>
        <option>Other</option>
      </select>
      <br>
      <!-- input language -->
      <label>Language Spoken : </label><br>
      <input type="checkbox" id="bindo" name="bindo" value="Bahasa Indonesia">
      <label for="bindo"> Bahasa Indonesia</label><br>
      <input type="checkbox" id="eng" name="eng" value="English">
      <label for="eng"> English</label><br>
      <input type="checkbox" id="other" name="other" value="Other">
      <label for="other"> Other</label>
      <br>
      <!-- input textarea biodata -->
      <label>Bio : </label><br>
      <textarea name="biodata" rows="4" cols="60"></textarea>
      <br>
      <!-- submit button -->
      <button type="submit" name="button">Sign Up</button>
    </form>
  </body>
</html>
