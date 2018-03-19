<h3>Uploaded Documents</h3>
<br>
		  <table class="table-bordered">
    <thead class="thead-dark">
      <tr>
        <th>Sr.No</th>
        <th id="t">File</th>
        <th>Type</th>
        <th>Download</th>
        <th>Delete</th>
        <th>Read</th>
      </tr>
    </thead>
  </table>
</div>

<?php 
mysqli_select_db($connect,$db_name);
$sql = "SELECT * FROM fileinfo WHERE user = '$username'";
$res = mysqli_query($connect,$sql);
$i=0;
while($count = mysqli_fetch_array($res))
{
  $file = $count['originalfilename'];
  $type = $count['type'];
  //echo "$file";
  $i++;
  echo "<!DOCTYPE html>
  <html>
  <head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
  <link href=\"https://fonts.googleapis.com/css?family=IBM+Plex+Serif\" rel=\"stylesheet\">
    <title></title>
  </head>
  <body>
  <table class=\"table-bordered\">
  <tbody>
      <tr>
        <td>$i</td>
        <td id = \"t\">$file</td>
        <td>$type</td>
        <td><a href=\"download.php?file=$file\">download</a></td>
        <td><a href=\"delete.php?file=$file\">delete</a></td>
        <td><a href=\"read.php?file=$file&type=$type\">read</a></td>
      </tr>
    </tbody>
    </table>
  </body>
  </html>";
}
?>
