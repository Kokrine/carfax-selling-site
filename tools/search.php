<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Search Vin</title>
  <link rel="stylesheet" href="style.css" />
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
</head>
  </div>
  <center><div class="form">
    <form id="process_vin_form" action="vin.php" method="post">
      <input type="text" name="vin" id="vin" placeholder="Enter VIN">
      <input type="submit" value="Submit">
      <!-- Placeholder where link is updated on success or an error message is shown -->
      <div id="vin_result"></div>
    </form>
  </div></center>
</body>
<script> 
  $('#process_vin_form').ajaxForm({ // Make sure the form doesn't redirect us.
    success: function(response) {
      // Update the link with the response.
      $('#vin_result').html(response);
      $('#vin').val('');
    }
  });
</script>
</html>