<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/jquery-ui.js" type="text/javascript"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript">
        
        $(document).ready(function(){
            
           $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        weekHeader: 'Sm',
        dateFormat: 'yy-mm-dd',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
    
    $('#picker').datepicker();
    $('#picker2').datepicker();
    
    
    
   
    
   
    
    
    
    
    
    
        });
        
        </script>
        
        
        
        
    </head>
    <body>

        <?php
        $arr_registered = array(
            1 => "Wal-Mart Stores",
            2 => "Exxon Mobil",
            3 => "Chevron",
            4 => "Berkshire Hathaway",
            5 => "Apple",
            6 => "Phillips 66",
            7 => "General Motors",
            8 => "Ford Motor",
            9 => "General Electric",
            10 => "Valero Energy");
        ?>




        <div class="container">

            <h3 class="centerFont" style="margin-top: 25px;">Employment Record - Employment Details</h3>
            <p class="centerFont">To be completed and retained for each employee</p>
            <form action="Guardar.php" method="POST" name="frm" id='form_Ingresar'>


                <table>
                    <tr>
                        <td class="title">Employer details</td>    
                    </tr>

                    <tr>
                        <td>Registered</td>
                        <td>
                            <select name="registered">
                                <option value="0">Seleccione una opcion</option>
<?php
foreach ($arr_registered as $c => $v) {
    echo "<option value'$v'>$v</option>";
}
?> 
                            </select>
                        </td>
                    </tr>



                    <tr>
                        <td>Trading name(if</td>
                        <td><input type="text" value="" name="trading_name" class="otro"/></td>
                    </tr>


                    <tr>
                        <td>ABN</td>
                        <td><input type="text" value="" name="elabn" class="otro"/></td>
                    </tr>


                    <tr>
                        <td class="title">Employee details</td>    
                    </tr>

                    <tr>
                        <td>Full name</td>
                        <td><input type="text" value="" name="full_name" required="true" /></td>
                    </tr>

                    <tr>
                        <td>Date of birth</td>
                        <td><input type="text" value="" name="date_of_birth" id="picker" required="true"/></td>
                    </tr>

                    <tr>
                        <td>Phone number</td>
                        <td><input type="text" value="" name="phone_number" class="otro"/></td>
                    </tr>

                    <tr>
                        <td>Address</td>
                        <td><input type="text" value="" name="address" required="true"/></td>
                    </tr>

                    <tr>
                        <td>Tax file</td>
                        <td><input type="text" value="" name="tax_file" class="otro"/></td>
                    </tr>

                    <tr>
                        <td>Date employment</td>
                        <td><input type="text" value="" name="date_employment" id="picker2"/></td>   
                    </tr>
                    
                    <tr>
                        <td>Employment status</td>
                        <td>
                          <input type="checkbox" name="Ongoing" value="Ongoing" />Ongoing  
                          <input type="checkbox" name="Temporary" value="Temporary" />Temporary
                          <input type="checkbox" name="Other1" value="Other" />Other
                        </td>
                        <td>
                          <input type="text" value="" name="status1" class="otro"/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                          <input type="checkbox" name="Full_time" value="Full-time" />Full-time  
                          <input type="checkbox" name="Part_time" value="Part-time" />Part-time
                          <input type="checkbox" name="Casual" value="Casual" />Casual
                          <input type="checkbox" name="Other2" value="Other" />Other  
                        </td>
                        
                        <td>(specify e.g. piece</td>
                        <td><input type="text" value="" name="status2" class="otro"/></td>
                    </tr>
                    
                    <tr>
                        <td>Ordinary hours of work* (for part-time or full-time employee)</td>
                        <td><input type="number" value="1" min="1" max="8" name="ordinary_hours" /></td>
                    </tr>
                    
                    
                    <tr>
                        <td>Agreed/required method of pay (e.g.)</td>
                        <td><input type="text" value="" name="method_of_pay" class="otro"/></td>
                    </tr>
                    
                    <tr>
                        <td>Agreed/required  pay period (e.g.)</td>
                        <td><input type="text" value="" name="pay_period" class="otro"/></td>
                    </tr>
                    <tr>
                        <td>Agreed/required  pay day (e.g.)</td>
                        <td><input type="text" value="" name="pay_day" class="otro"/></td>
                    </tr>
                    <tr>
                        <td>Apprenticeship/Traineeship</td>
                        <td><input type="text" value="" name="apprenticeship" class="otro"/></td>
                    </tr>
                    <tr>
                        <td>Name of Award or Agreement that</td>
                        <td><input type="text" value="" name="name_of_award" class="otro"/></td>
                    </tr>
                    <tr>
                        <td>Classification/job title under the</td>
                        <td><input type="text" value="" name="classification" class="otro"/></td>
                    </tr>
                    
                    
                    <tr>
                        <td>
                            <input type="submit" value="Submit" id="btn_submit"/>
                        </td>  
                    </tr>

                </table>


            </form>
        </div>



    </body>
</html>
