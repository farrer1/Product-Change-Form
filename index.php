<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type='image/x-icon' href="data:image/vnd.microsoft.icon;base64,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"
    />
    <link rel="icon" type='image/x-icon' href="data:image/vnd.microsoft.icon;base64,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">
    <title>Graphics Change Form</title>
    <link href="css/main.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <script src="js/jquery-latest.js"></script>
    <style>
        body {
            background-color: #336699;
        }

        form {
            background-color: #fafcff;
            border-radius: 0.3rem;
        }
    </style>
</head>

<body>
<div class="container" style="text-align: center;">
    <form id="form1" method="post">
        <div class="row marketing">
            <header class="footer" style="width: 100%;">
                <img src="nicepak_shadow_sm.png" style="max-width:100%; max-height:100%;" alt="NPCorpLogo">
            </header>
            <div class="col-lg-12">
                <hr/>
                <h2 style="padding-bottom: 20px;">Graphics Change Form</h2>
                <h3 style="padding-bottom: 20px;">Product Information</h3>
                <div>
                    <div class="form-group">
                        <label>Parent Code</label>
                            <div class="input-group">
                                <input id="Par" name="Par" style="text-align: center" class="form-control" list="par_code" value="<?php if(isset($_POST['Par'])){echo $_POST['Par'];} //Keeps the entered parent code displayed in the text box after page reload?>">
                                <datalist id="par_code">
                                    <?php
									//Connect to the database
									$dsn = 'sqlsrv:Server=NJ-SQLDEV;Database=RFdev';   //Connection driver, sever, and database names. NOTE: Must be changed if the tables are moved to another database/server
									$user = 'RFsvc';    //User account with which to login to the server and access the archive NOTE: Must be changed when I leave the company
									$password = 'N!cep4k*2019';     //Password for the user account specified above NOTE: Also must be changed when I leave

									//Connect to the database
									try {
										$dbh = new PDO($dsn, $user, $password);	//$dbh now represents our connection to the database through PDO
									} catch (PDOException $e) {
										die('Connection failed: ' . $e->getMessage());
									}
									$pdo_query = "SELECT DISTINCT [PRNT_ITEM] FROM [RFdev].[dbo].[BillOfMaterials]";    //Query gets the item codes of all parent items
									$sth = $dbh->prepare($pdo_query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
									$sth->execute();
									while($row=$sth->fetch()){  //Print out all item codes retrieved by our query as options for the dropdown menu
									    echo "<option value='".$row[0]."'>
									    ";
                                    }
                                    ?>
                                </datalist>
                            </div>
                        <footer class="footer" style="padding-bottom: 20px;">
                            <input type="submit" name="submit" id="submit_par" value="Submit" class="btn btn-primary">  <!--Causes the page to reload with checkbox input fields representing child items-->
                        </footer>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form id="form2" method="post" action="report.php">
            <input type="hidden" id="Par" name="Par" value=<?php if(isset($_POST['Par'])){echo $_POST['Par'];} //Done to preserve the entered parent code after displaying the checkboxes?>>
        <div class="row marketing">
            <div class="col-lg-12">
                <hr/>
                <div>
                    <div class="form-group">
                        <div class="input-group">
							<?php
                            if(isset($_POST['Par'])){
								$pdo_query = "SELECT [CHLD_ITEM] FROM [dbo].[BillOfMaterials] WHERE [PRNT_ITEM] = :par_code";   //Query gets all child items associated with this parent item
								$sth = $dbh->prepare($pdo_query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
								$sth->execute(array('par_code' => $_POST['Par']));
								$i = 0;
								while($child=$sth->fetch()){    //Print all child items as checkbox input fields
									echo "<span class=\"input-group-addon\" style=\"padding-right: 80px; font-size: 20px\">";
									echo "<label style=\"margin-top: auto; margin-bottom: auto; cursor: pointer\" onclick=\"$('#Child_".$i."').trigger('click');\">".$child[0]."</label>
                                ";
									$str = "<input id=\"Child_".$i."\" name=\"Child_".$i."\" class=form-control\" type=\"checkbox\"/><br>
                                ";
									echo $str;
									echo "</span>
                                ";
									$i++;   //Counts the children we've printed out checkboxes for
								}
								for($j=0;$j<3;$j++){
									echo "<span class=\"input-group-addon\" style=\"padding-right: 80px; font-size: 20px\">";
									echo "<label style=\"margin-top: auto; margin-bottom: auto; cursor: pointer\" onclick=\"$('#New_Child_".$j."').trigger('click');\">New Child Item</label>
                                ";
									$str = "<input id=\"New_Child_".$j."\" name=\"New_Child_".$j."\" class=form-control\" type=\"checkbox\"/><br>
                                ";
									echo $str;
									echo "</span>
                                ";
									$i++;
                                }
                            }
							?>
                        </div>
                        <div class="input-group">
                            <label>Product Description:</label>
                            <div class="input-group">
                                <textarea id="Description" name="Description" class="form-control" type="text"></textarea>
                            </div>

                            <label>Describe Change to Existing SKU:</label>
                            <div class="input-group">
                                <textarea id="SKU_Change" name="SKU_Change" class="form-control"></textarea>
                            </div>

                            <label>Reason for Change:</label>
                            <div class="input-group">
                                <textarea id="Reason" name="Reason" class="form-control"></textarea>
                            </div>

                            <label>Leftover Inventory Disposition:</label>
                            <div class="input-group">
                                <input id='Hard' type="radio" name="Reason" value="Hard"><label for="Hard">Immediate Change</label><br>
                                <input id='Soft' type="radio" name="Reason" value="Soft"><label for="Soft">Deplete & Delete</label><br>
                                <input id='Other' type="radio" name="Reason" value="Other"><label for="Other">Other - Specify Below</label><br>
                            </div>

                            <label>Can we mix and match components?</label>
                            <div class="input-group">
                                <input style="text-align: center" id="Other_Reason" name="Other_Reason" class="form-control" type="text">
                            </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="row marketing">
            <div class="col-lg-12">
                <hr/>
                <h3 style="padding-bottom: 20px;">Changes To Graphics Only</h3>
                <div>
                    <div class="form-group">
                        <label>Sales Contact</label>
                        <div class="input-group">
                            <input id="Sales_Contact" name="Sales_Contact" style="text-align: center" class="form-control" type="text">
                        </div>

                        <label>Marketing Contact</label>
                        <div class="input-group">
                            <input id="Marketing_Contact" name="Marketing_Contact" style="text-align: center" class="form-control" type="text">
                        </div>

                        <label>Product Category</label>
                        <div class="input-group">
                            <input id="Product_Category" name="Product_Category" style="text-align: center" class="form-control" type="text">
                        </div>

                        <label>Project Manager</label>
                        <div class="input-group">
                            <input id="Project_Manager" name="Project_Manager" style="text-align: center" class="form-control" type="text">
                        </div>

                        <label>Product Library Item Number (if applicable)</label>
                        <div class="input-group">
                            <input id="Item_Number" name="Item_Number" style="text-align: center" class="form-control" type="text">
                        </div>

                        <label>Customer</label>
                        <div class="input-group">
                            <input id="Customer" name="Customer" style="text-align: center" class="form-control" type="text">
                        </div>

                        <label>Customer Meeting Date</label>
                        <div class="input-group">
                            <input id="Meeting_Date" name="Meeting_Date" style="text-align: center" class="form-control" type="text">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row marketing">
            <div class="col-lg-12">
                <hr/>
                <h3 style="padding-bottom: 20px;">Additional Project Details</h3>
                <div>
                    <div class="form-group">
                        <label>Additional Comments</label>
                        <div>
                            <textarea id="Details" name="Details" class="form-control" rows="5" cols="50"></textarea>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <footer class="footer" style="padding-bottom: 20px;">
            <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary">
        </footer>
    </form>
</div>

<!-- Container -->
</body>

</html>
