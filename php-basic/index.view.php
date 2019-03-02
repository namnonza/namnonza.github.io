<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bulma.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="checkbox.css">
    <title> Form</title>    

</head>
<body>
    <div id="wrapper">
        <div id="content">
            <h1 class="header">NET Calculator</h1>
            <form action="./form_validation/" method="post" enctype="multipart/form-data">
                <div class="columns">
                    <div class="column is-1">
                        <label class="label labelE">NAME</label>
                    </div>
                    <div class="column">
                        <input class="input info-input" type="text" name="name" placeholder="type your name here..."><span class="error">* <?php echo $nameStatus; ?></span>
                    </div>
                </div>
                <br>
                <div class="columns">
                    <div class="column is-offset-1">
                        <div class="file has-name">
                            <label class="file-label">
                                <input class="file-input info-input" type="file" name="fileToUpload" id="fileToUpload">
                                <span class="file-cta">
                                <span class="file-icon">
                                    <i class="fas fa-upload"></i>
                                </span>
                                    <span class="file-label">
                                        Choose a file…
                                    </span>
                                </span>
                                <span class="file-name pic-name">
                                    Select your profile picture
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="columns">
                    <div class="column is-1">
                        <label class="label labelE">PRICE</label>
                    </div>
                    <div class="column">
                        <input class="input info-input" type="text" name="price" placeholder="type price here..."><span class="error">* <?php echo $priceStatus; ?></span>
                    </div>
                </div>
                <br>
                <div class="columns">
                    <div class="column is-3 is-offset-1">
                        <label class="checkbox-container">Vat
                            <input type="checkbox" name="vat">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="column is-3">
                        <label class="checkbox-container">Service Charge
                            <input type="checkbox" name="serviceCharge">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <br>
                <span> or upload CSV file </span>
                <div class="columns">
                    <div class="column is-offset-1">
                        <div class="file is-boxed">
                            <label class="file-label">
                                <input class="file-input" type="file" name="CSVupload" id="CSVupload"  accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />
                                <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label">
                                        Choose a file…
                                    </span>
                                </span>
                                <span class="file-name csv-name">
                                </span>
                            </label>
                            <span class="error"> <?php echo $csvStatus; ?></span>
                        </div>
                    </div>
                </div>

               
                <br>
                <div class="columns">
                    <div class="column is-2 is-offset-5">
                        <input class="button is-medium is-fullwidth" type="submit" name="submit">
                    </div>
                </div>
            </form>
            <p>
                you can download <a href="./uploads/template.php">template.csv</a>
            </p>
        </div>
    </div>
    <script>
        document.querySelector("#fileToUpload").onchange = function(){
            document.querySelector(".pic-name").textContent = this.files[0].name;
        }
        document.querySelector("#CSVupload").onchange = function(){
            document.querySelector(".csv-name").textContent = this.files[0].name;
        }
    </script>
</body>
</html>