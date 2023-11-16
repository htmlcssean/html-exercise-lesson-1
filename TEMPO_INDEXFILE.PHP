<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Personal Data Sheet</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Your custom CSS styles (if any) -->
    <style>

        .text-centermb4{
            font-size: 40px;
            text-align: center;
            font-weight: bold;

        }
    .person{
        font-size: 20px;
    }
        .row1{
            margin-bottom: 15px;

        }
   
    .warning{
       font-style: italic;
    }

   .warning2{
    font-size: 15px;

   }

   
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-centermb4">Personal Data Sheet</h1>
    <div style="
        display:grid;
        grid-template-columns: 1fr;
        
     
    ">
    <div class = "row1" style="background-color: lightblue;padding-left:10px; padding-top:8px">
        <h2 class="person">Personal Information</h2>
        <p class = "warning2"><span class = "warning">WARNING</span>: Any misrepresentation made in the Personal Data Sheet and the Work Experience Sheet shall cause the filing of administrative/criminal case/s against the person concerned.</p>
    </div>
</div>
    <form>
    <div class="form-row">
            <div class="form-group col-md-6">
                <label for="firstName">FIRST NAME</label>
                <input type="text" class="form-control" id="firstName" placeholder="Enter your FIRST NAME">
            </div>
            <div class="form-group col-md-6">
                <label for="lastName">NAME EXTENSION &#40; JR,SR &#41;</label>
                <input type="text" class="form-control" id="lastName" placeholder="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">MIDDLE NAME</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your MIDDLE NAME">
            </div>
            <div class="form-group col-md-6">
                <label for="phone">CONTACT NUMBER</label>
                <input type="tel" class="form-control" id="phone" placeholder="ENTER YOUR CONTACT NUMBER">
            </div>
        </div>
        <div class="form-group">
            <label for="address">SURNAME</label>
            <input type="text" class="form-control" id="address" placeholder="Enter your SURNAME">
        </div>
      
    </form>
</div>
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>