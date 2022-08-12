@extends('admin.master')

@section('body')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Basic Patient form trial</title>
    
</head>

<body>
  
    <div class="container-fluid" id="main-id">
        <div class="row">
            <div class="col-lg">
                <form method="post"  action="{{route('createBILL')}}" >
                {{ csrf_field() }}
                    <div class="row">
                        <div id ="bill-details"  class="flex bg-gray-200">
                            <img class="img1" src="icon\card.png" alt="">
                             Bill details
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Patient</label>
                                <span>*</span>
                                <select class="form-control" name="Patient">
                                    <option>Select</option>
                                    <option>Hasna</option>
                                    <option>Hena</option>
                                    <option>S M Mohaimanul islam</option>
                                    <option>Maraz</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Referred by</label>
                                <select class="form-control" name="Referred_by">
                                    <option>Select</option>
                                    <option>Hasna</option>
                                    <option>Hena</option>
                                    <option>S M Mohaimanul islam</option>
                                    <option>Maraz</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Bill date</label>
                                <span>*</span>
                                <input type="date" name="Bill_date" class="form-control" value="2022-06-19">
                            </div>
                        </div>
                    </div>
                    
                    <br>


                    <div class="row">
                        <div id="report-id" class="flex">
                        <img class="img2 " src="icon/information.png" alt="">
                          Report Details
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Delivery date</label>
                                <span>*</span>
                                <input type="date" name="Delivery_date" class="form-control" value="2022-06-19">
                            </div>


                            <div class="col-lg-6">
                                <label>Delivery time</label>
                                <span>*</span>
                                <input type="time" name="Delivery_time" class="form-control" value="11:15">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                             
                            <label>Remarks*</label>
                              <textarea class="form-control" name="Remarks" aria-label="With textarea"></textarea>
                            </div>
                                
                                

                            
                        </div>
                    </div>


                      
                        <div class="row" id="table-id" >
                            <!-- <div class="class1"> -->
                            <table>
                              
                              
                                <!-- <th>Category</th>
                                <span>*</span>
                                <th>Test Name</th>
                                <label>Price</label>
                                <label>Discount(%)</label>
                                <label>Total Price</label> -->
                                
                                  <tr id="t1">
                                  <th  style="width:15%">Catagory</th>
                                  <th style="width:20%">Test name </th>
                                  <th style="width:15%">Price </th>
                                  <th style="width:30%">Discount(%)</th>
                                  <th style="width:20%">Total Price</th>
                                  </tr>

                            <tr>
                            <tbody id="mytable">
                            

                            
                                
                                  <td>
                                 
                                    
                                    <select class="form-control Category">
                                      <option>Select</option>
                                      <option>A</option>
                                      <option>B</option>
                                      <option>C</option>
                                      <option>D</option>
                                    </select>
                                  </td>
                                  <td>
                                   
                                    <select class="form-control TestName">
                                      <option>Select</option>
                                      <option>A</option>
                                      <option>B</option>
                                      <option>C</option>
                                      <option>D</option>
                                    </select>
                                  </td>
                                  <td>
                                    
                                    <input type="text" id="Price" name="Price[]" class="form-control Price" />
                                  </td>
                                  <td>
                                  
                                    <div class="row" id="dis-id1">
                                      <div class="col-lg">
                                          <div class="input-group">

                                              <input type="text" name="discount1[]" class="form-control Discount1"  placeholder="Enter Discount %"/>
                                              <input type="text" name="discount2[]" id="discount2" class="form-control Discount2" />

                                          </div>

                                    </div>
                                  </td>
                                  <td>
                                  
                                    <input type="text" name="totalPrice[]" id="tp" class="form-control totalPrice">
                                  </td>
                                  <td class="close">

                                   <i class="fa fa-trash" id="deletebtn" onclick="removeRow(event)"></i>
                          
                                    <!-- <span class="close-button" onclick="removeRow(event)">X</span> -->
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <!--<div class="class3">
                                <button id="add" class="flex">
                                 <img class="img3" src="icon/add.png" alt="">
                                  <p class="font-bold text-gray-900">Add Rows</p>
                                </button>
                          </div>-->

                          <div>

                            <button type="button" id="add" class="btn1">
                              <img class="img3" src="icon/add.png" alt="">
                              Add rows
                            </button>
                             
                          </div>
        
               
                          <!--<button type="button" id="add">Add rows</button>-->
                       

                    <!-- <div cls="update"> -->
                    <div class="row" id="new-row">
                        <div class="col-lg-7"></div>
                        <div class="col-lg-5" id="BillSum">
                            
                            <div id ="bs"  class="flex bg-gray-200">
                                <!-- <label>Bill summary</label><br> -->
                                <label>Bill Summary</label>
                            </div>
                            
                            <table id="tab_logic_total" style="border-collapse: separate;">
                                <tbody>
                                <tr>
                                    <th class="text-center">Sub Total</th>
                                    <td class="text-center"><div class="input-group mb-2 mb-sm-0">
                                    <span class="input-group-text" id="basic-addon1">$</span>
                                    <input type="text"  id="st" name="Sub_total" placeholder='0.00' class="form-control" id="sub_total" readonly/>
                                    </div></td>
                                </tr>
                                <tr>
                                    <th class="text-center">Tax (+)</th>
                                    <td class="text-center"><div class="input-group mb-2 mb-sm-0">
                                        <span class="input-group-text" id="basic-addon1">%</span>
                                        <input type="text" id="tax1" name="tax1" class="form-control tax1"  placeholder="0"  onkeyup="calculate(this.value);">
                                        <input type="text" id="tax2" name="tax2" class="form-control tax2"  placeholder="0" readonly/>
                                    
                                    </div></td>
                                </tr>
                                <tr>
                                    <th class="text-center">Discount(-)</th>
                                
                                    <!-- <div class="input-group-addon">$</div> -->
                                    <td class="text-center"><div class="input-group mb-2 mb-sm-0">
                                    <span class="input-group-text" id="basic-addon1">$</span>
                                    <input type="text" id="discBill" name="Discount_Bill" placeholder='0.00' class="form-control disc1st"  onkeyup="calculate(this.value);" readonly/>
                                    </div></td>
                                    
                                </tr>
                                <tr>
                                    <th class="text-center">Net Payable</th>
                                    <td class="text-center"><div class="input-group mb-2 mb-sm-0">
                                    <span class="input-group-text" id="basic-addon1">$</span>
                                    <input type="text" name="Net_Payable" id="net_payable" placeholder='0.00' class="form-control disc2st" readonly/>
                                    </div></td>
                                </tr>

                                <tr>
                                    <th class="text-center">Received Ammount</th>
                                    <td class="text-center"><input type="text" name="Received_Ammount" id="" placeholder='0.00' class="form-control"></td>
                                </tr>
                                <tr>
                                    <th class="text-center">Pay Via</th>
                                    <td>
                                    <select class="form-control" name="Pay_Via">
                                    <option>Select</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    </select>
                                    </td>
                                    
                                </tr>

                                <tr>
                                    <th class="text-center">Remarks</th>
                                    <td class="text-center"><input type="text" name="Remarks2" id="" placeholder='0.00' class="form-control"></td>
                                </tr>


                                </tbody>
                            </table>
                                <!-- <div class="row" id ="st-id">
                            
                                    <label>Sub total</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                        <input type="text" id="st" name="Sub total" class="form-control Subtotal"placeholder="0.00" aria-label="Username" aria-describedby="basic-addon1"></td>
                                    </div>
                                </div> -->
                                
                                <!-- <div class="row" id="tax-id">
                                    <label >Tax</label>
                                    <div class="col=lg-6">
                                        <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">%</span>
                                        <input  type="text" id="tax1" name="tax1" class="form-control tax1" placeholder="Enter Tax %"  aria-label="Username" aria-describedby="basic-addon1" onkeyup="calculate(this.value);" ></td>
                                        <input type="text" id="tax2" name="tax2" class="form-control tax2" placeholder=""  aria-label="Username" aria-describedby="basic-addon1" >
                                    </div>
                            
                                    </div>
                                </div> -->
                                
                                <!-- <div class="row" id="dis-id">
                                    <label>Discount(-)</label><br>
                                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">$</span>
                            <input type="text" id="discBill" name="Discount_Bill" class="form-control disc1st"   aria-label="Username" aria-describedby="basic-addon1" onkeyup="calculate(this.value);"></td>
                        </div>
                                </div> -->

                                <!-- <div class="row"id="np-id">
                                
                                    <label>Net payable</label><br>
                                    <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">$</span>
                                    <input type="text" id="net_payable" name="Net_Payable" class="form-control disc2st" aria-label="Username" aria-describedby="basic-addon1"></td>
                                    </div>
                                </div> -->
                            
                                
                                <!-- <div class="row"  id="ra-id">
                                    <label>Received ammount</label><br>
                                    <input type="text" id="received_ammount" name="Received_ammount" class="form-control ra" placeholder="Enter payment ammount">
                                </div>
                                
                                <div class="row"  id="pv-id">
                                    <label>Payvia</label><br>
                                    <select class="form-control">
                                    <option>Select</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    </select>
                            
                                </div>
                                
                                <div class="row" id="remarks">
                                    <label>Remarks</label><br>
                                    <input type="text" name="Sub total" class="form-control" placeholder="Write your remarks">
                            
                                </div> -->
                                <!-- <button type="button" onclick="myFunction()">Create bill</button> -->

                                

                                
                                </div>
                            </div>

                            
                            <div class="row" id="create-btn-cls">
                                <div class="col-lg-7"></div>
                                    <div class="col-lg-5">
                                    <br>
                                    <!-- <button type="button" id="create-bill-cls" >Create bill</button> -->
                                    <button type="submit" id="create-bill-cls" class="btn-last">
                                    <img class="img4" src="icon/add.png" alt="">
                                    Create Bill
                                    </button>
                                    </div>
                                </div>
                             



                            
                            
                              
                </form>            
                            
                                
                                


                    
                            
            




                

            </div>

        </div>

    </div>



  <script>

    const table = document.getElementById("mytable");

    document.getElementById("add").addEventListener("click", e => {
    var row = table.querySelector("tr").cloneNode(true);
    row.querySelectorAll("input").forEach(inp => inp.value = "");
    table.append(row);
    });

    table.addEventListener("input", e => {
    let gtotal = 0;
    let totaldiscount = 0;
    table.querySelectorAll("tr").forEach(row => {
        let price = +row.querySelector(".Price").value;
        let discount1 = row.querySelector(".Discount1").value;
        let percent = discount1 / 100;
        let discount2 = price * percent;
        let total = price - discount2;
        row.querySelector(".Discount2").value = discount2.toFixed(2);
        row.querySelector(".totalPrice").value = total.toFixed(2);
        gtotal += price;
        totaldiscount += discount2;
        document.querySelector("#st").value = gtotal.toFixed(2);
        document.querySelector(".disc1st").value = totaldiscount.toFixed(2);



        // Calculation of the  Bill Summary portion
        var st1 = +document.getElementById("st").value;
        var t1 = +document.getElementById("tax1").value;

        var tax1 = +((st1 * t1) / 100);

        document.getElementById("tax2").value = tax1;

        var discBill = +document.getElementById("discBill").value;
        var np = (st1 + tax1) - discBill;
        document.getElementById("net_payable").value = np.toFixed(2);

    });
    });


    function removeRow(event) {
    let totalST = document.getElementById("st").value;
    // make sure you are getting the total price of the current row
    let currentPrice = event.currentTarget.parentNode.parentNode.querySelector('#Price').value;
    let currentST = totalST - currentPrice;
    document.querySelector("#st").value = currentST.toFixed(2);


    let totalDISC= document.getElementById("discBill").value;
    let rowDISC= event.currentTarget.parentNode.parentNode.querySelector('#discount2').value;
    let currentDISC= totalDISC- rowDISC;
    document.querySelector("#discBill").value = currentDISC.toFixed(2);




    // Calculation of the  Bill Summary portion
    var st1 = +document.getElementById("st").value;
    var t1 = +document.getElementById("tax1").value;

    var tax1 = +((st1 * t1) / 100);

    document.getElementById("tax2").value = tax1;

    var discBill = +document.getElementById("discBill").value;
    var np = (st1 + tax1) - discBill;
    document.getElementById("net_payable").value = np.toFixed(2);




    event.currentTarget.parentNode.parentNode.remove(); // remove the row completely
    }



    function calculate(value) {

    var st1 = +document.getElementById("st").value;
    var t1 = +document.getElementById("tax1").value;

    var tax1 = +((st1 * t1) / 100);

    document.getElementById("tax2").value = tax1;

    var discBill = +document.getElementById("discBill").value;
    var np = (st1 + tax1) - discBill;
    document.getElementById("net_payable").value = np.toFixed(2);
    }

  </script>
        

           
                
                   

                    
                      
                
                              




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>

       
</body>

</html>

@endsection