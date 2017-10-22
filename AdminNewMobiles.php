

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>sign up</title>
<style>
input[type=text], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
input[type=text]:focus {
    border: 3px solid #555;
}
input[type=password]:focus {
    border: 3px solid #555;
}
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
    margin: 18px 18px 18px 18px;
}
</style>
</head>
<body>
<div>
  <form action="datacaptureAdminNewMobiles.php" method="post">
    <label for="ImageURL">Image URL&nbsp&nbsp&nbsp:</label>
    <input type="text" id="ImageURL" name="ImageURL">

    <label for="ModelNo">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspModel No &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
    <input type="text" id="ModelNo" name="ModelNo">
    <br><label for="ModelName">Model Name:</label>
    <input type="text" id="ModelName" name="ModelName">

<label for="Price">Price&nbsp&nbsp&nbsp:</label>
    <input type="text" id="Price" name="Price">
<label for="WidthHeightDepthWeight">Width * Height * Depth * Weight&nbsp&nbsp&nbsp:</label>
    <input type="text" id="WidthHeightDepthWeight" name="WidthHeightDepthWeight">

<label for="Resolution">Resolution&nbsp&nbsp&nbsp:</label>
    <input type="text" id="Resolution" name="Resolution">

<label for="ResolutionType">ResolutionType&nbsp&nbsp&nbsp:</label>
    <input type="text" id="ResolutionType" name="ResolutionType">

<label for="OS">Operating System&nbsp&nbsp&nbsp:</label>
    <input type="text" id="OS" name="OS">


<label for="InterStorage">Internal Storage&nbsp&nbsp&nbsp:</label>
    <input type="text" id="InterStorage" name="InterStorage">

<label for="ExpandStorage">Expand Storage&nbsp&nbsp&nbsp:</label>
    <input type="text" id="ExpandStorage" name="ExpandStorage">

<label for="RAM">RAM&nbsp&nbsp&nbsp:</label>
    <input type="text" id="RAM" name="RAM">

<label for="Colour">Colour&nbsp&nbsp&nbsp:</label>
    <input type="text" id="Colour" name="Colour">
    <input type="submit" value="Create Account">
  </form>
 
</div>

</body>
</html>

