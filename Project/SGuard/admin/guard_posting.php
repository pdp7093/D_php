<?php include_once('header.php') ?>

<div id="wrappeer">
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="card ">
                    <div class="card-title">
                        <h1 class="text-center ">Guard Posting Request Id: <?php echo $fetch->req_id ?></h1>
                    </div>
                    <div class="card-body ">
                        <form action="" method="post" style="border:2px solid black;padding:10px;">
                            <div class="form-group mb-3">
                                <label for="address">Posting Address</label>
                                <textarea name="address" id="address" cols="30" rows="2" disabled
                                    class="form-control"><?php echo $fetch->address ?></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="posting_date" class="form-label ">Posting Date</label>
                                <input type="text" name="posting_date" id="posting_date"
                                    value="<?php echo $fetch->posting_date ?>" disabled class="form-control">
                            </div>
                            <div class="form-group ">
                                <label for="nameOptions">Avaliable Guards </label>
                                <select id="nameOptions" onchange="myfunction()" class="form-control " style="margin-bottom: 15px;">
                                    <option value="">----------Select Guards------------</option>
                                    <?php foreach($fetch1 as $gd) {?>
                                        <option value="<?php echo $gd->gu_id?>" name="<?php echo $gd->full_name?>"><?php echo $gd->full_name?></option>
                                        <?php }?>
                                </select>
                                <input type="hidden" name="selectedList"id="selectedList" >
                                <input type="text" name="selectedName"id="selectedName" disabled class="form-control mt-4">

                                <?php $i = $fetch->number_of_guard; ?>

                                <script>
                                    
                                    let selectedArray = [];
                                    let selectedName=[];
                                    var n="<?php echo $fetch->number_of_guard?>";
                                  
                                    
                                    function myfunction() {
                                        const selectElement = document.getElementById('nameOptions');
                                        const selectedOption = selectElement.options[selectElement.selectedIndex];
                                       
                                        if (selectedArray.length < n) {
                                            if (!selectedArray.includes(selectedOption.value)) {
                                                // Add selected value to the array
                                                selectedArray.push(selectedOption.value);
                                                selectedName.push(selectedOption.innerText);
                                                // Disable the selected option
                                                selectedOption.disabled = true;
                                                
                                                // Display updated array
                                                document.getElementById('selectedList').value = selectedArray.join(", ");
                                               // var A=document.getElementById('selectedList');
                                               
                                               document.getElementById('selectedName').value = selectedName.join(", ");
                                            }
                                           
                                        } else {
                                           
                                            alert("You met the requirement");
                                        }
                                       // console.log(selectedArray);
                                    }
                                </script>
                            </div>
                            
                            <div class="form-group mt-3">
                                <input type="submit" value="Submit" name="submit" class="btn btn-primary btn-lg  ">
                                <a href="Hiring Request" class="btn btn-danger btn-lg">Go Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('footer.php') ?>