<?php
if(isset($_COOKIE["pin"])&& isset($_COOKIE["reg"])&& isset($_COOKIE["class"]) &&isset($_COOKIE["term"])){
$pin=$_COOKIE["pin"];
$regno=$_COOKIE["reg"];
$class=$_COOKIE["class"];
$term=$_COOKIE["term"];
include('connect.php');
if($term=="first"){
$select=$con->query("select *from result_pri where PIN='$pin' and ADM_NO='$regno' and CLASS='$class'");
if($select!=false){
	$rows=$select->num_rows;
	$result=$select->fetch_assoc();
	extract($result);
if(extract($result)==NULL){
	header("location:resultchecker-pre.php");
	}
	}//selectend
else{
	die("RESULT NOT FOUND");
	}
}//end of term

else if($term=="second"){
$select=$con->query("select *from result_pri_second where PIN='$pin' and ADM_NO='$regno' and CLASS='$class'");
if($select!=false){
	$rows=$select->num_rows;
	$result=$select->fetch_assoc();
	extract($result);
if(extract($result)==NULL){
	header("location:resultchecker-pre.php");
	}
	}//selectend
else{
	die("RESULT NOT FOUND");
	}
}//end of term

else if($term=="third"){
$select=$con->query("select *from result_pri_third where PIN='$pin' and ADM_NO='$regno' and CLASS='$class'");
if($select!=false){
	$rows=$select->num_rows;
	$result=$select->fetch_assoc();
	extract($result);
if(extract($result)==NULL){
	header("location:resultchecker-pre.php");
	}
	}//selectend
else{
	die("RESULT NOT FOUND");
	}
 }//end of term

}//cookiesetend
else{
 header("location:resultchecker-pre.php");
	}	
?> 
  <!DOCTYPE HTML> 
  <html lang="en"> 
    <head> 
      <meta charset="utf-8"> 
      <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
      <title>ELIXANDES ACADEMY BRITISH INT' STANDARD</title>       
      <!-- Bootstrap -->       
      <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' /> 
      <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /> 
      <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet"> 
      <meta name="viewport" content="width=device-width, initial-scale=1"> 
      <meta name="author" content="ELIXANDES ACADEMY"> 
      <link href="images/elixandes_icon.png" rel="icon" /> 
      <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->       
      <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
      <!-- start plugins -->       
      <script type="text/javascript" src="js/jquery.min.js"></script>       
      <script type="text/javascript" src="js/bootstrap.js"></script>       
      <script type="text/javascript" src="js/bootstrap.min.js"></script>       
      <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>       
      <script type="text/javascript" src="js/jquery.cycle.all.js"></script>       
      <!----font-Awesome----->       
      <link rel="stylesheet" href="fonts/css/font-awesome.min.css"> 
      <!----font-Awesome----->       
      <style>
        #red
                {
                background-color: red;
                text-align: center;
                color: white;
                padding: 10px;
                font-size: 12px;
                }
                #caps
                {
                text-transform: uppercase;
                }
                td
                {
                font-size: 14px;
                }
                #sign
                {
                width: 50px;
                height: 4px;
                }

</style>       
    </head>     
    <body class=""> 
      <div class="mainresultbody"> 
        <div class="container"> 
          <div class="submainresult"> 
            <img src="images/topimage.jpg" /> 
            <form role="form" class="" data-pg-collapsed method="post"> 
              <div class="row" data-pg-collapsed> 
                <div class="col-xs-6"> 
                  <div class="leftentrydetails"> 
                    <div class="table-responsive"> 
                      <table class="table table-condensed table-striped table-hover table-bordered"> 
                        <tbody class=""> 
                          <tr class=""> 
                            <td class="resultdetails-td">ADMISSION NO.</td> 
                            <td class="reducetdfont"> 
                              <?php echo $ADM_NO;?> 
                            </td>                             
                          </tr>                           
                          <tr class=""> 
                            <td class="resultdetails-td">SURNAME</td> 
                            <td class=""> 
                              <?php echo $FNAME;?> 
                            </td>                             
                          </tr>                           
                          <tr class=""> 
                            <td class="resultdetails-td">OTHER NAME</td> 
                            <td class=""> 
                              <?php echo $LNAME;?> 
                            </td>                             
                          </tr>                           
                          <tr class=""> 
                            <td class="resultdetails-td">CLASS</td> 
                            <td class=""> 
                              <?php echo $CLASS;?> 
                            </td>                             
                          </tr>                           
                          <tr class="" data-pg-collapsed> 
                            <td class="resultdetails-td">SESSION</td> 
                            <td class=""> 
                              <?php echo $SESSION;?> 
                            </td>                             
                          </tr>                           
                          <tr class="" data-pg-collapsed> 
                            <td class="resultdetails-td">TERM</td> 
                            <td id="caps"> 
                              <?php echo $TERM;?> 
                            </td>                             
                          </tr>                           
                        </tbody>                         
                      </table>                       
                    </div>                     
                  </div>                   
                </div>                 
                <div class="col-xs-6"> 
                  <div class="leftentrydetails"> 
                    <div class="table-responsive"> 
                      <table class="table table-condensed table-striped table-hover table-bordered"> 
                        <tbody class=""> 
                          <tr class="" data-pg-collapsed> 
                            <td class="resultdetails-td">SEX</td> 
                            <td class=""> 
                              <?php echo $SEX;?> 
                            </td>                             
                          </tr>                           
                          <tr class="" data-pg-collapsed> 
                            <td class="resultdetails-td">NO. IN CLASS</td> 
                            <td class=""> 
                              <?php echo $NO_CLASS;?> 
                            </td>                             
                          </tr>                           
                          <tr class="" data-pg-collapsed> 
                            <td class="resultdetails-td">TOTAL NO.OF SUBJECTS</td> 
                            <td class=""> 
                              <?php echo $NO_SUBJECTS;?> 
                            </td>                             
                          </tr>                           
                          <tr class="" data-pg-collapsed> 
                            <td class="resultdetails-td">OVERALL TERM TOTAL</td> 
                            <td class=""> 
                              <?php echo $TOTAL_SCORE. " OUT OF  ".$OUT_OFF;?> 
                            </td>                             
                          </tr>                           
                          <tr class="" data-pg-collapsed> 
                            <td class="resultdetails-td">AVERAGE PERCENTAGE</td> 
                            <td class=""> 
                              <?php echo round($OVERALL_PERCENT,2)."%";?> 
                            </td>                             
                          </tr>                           
                          <tr class="" data-pg-collapsed> 
                            <td class="resultdetails-td">POSITION</td> 
                            <td class=""> 
                              <?php echo $POSITION;?> 
                            </td>                             
                          </tr>                           
                        </tbody>                         
                      </table>                       
                    </div>                     
                  </div>                   
                </div>                 
                <div class="col-xs-3" data-pg-collapsed> 
                  <div class="leftentrydetails"> 
                    <div class="table-responsive"> 
                      <table class="table table-bordered table-condensed table-striped table-hover"> 
                        <tbody class=""> 
</tbody>                         
                      </table>                       
                    </div>                     
                  </div>                   
                </div>                 
              </div>               
              <div class="resultcova" data-pg-collapsed> 
                <div class="table-responsive"> 
                  <table class="table table-striped table-bordered table-hover table-condensed"> 
                    <thead> 
                      <tr> 
                        <th>SUBJECTS</th> 
                        <th><span class="rt">TEST (20)</span></th> 
                        <th><span class="rt">ASSIGN (10)</span></th> 
                        <th><span class="rt">PROJECT (10)</span></th> 
                        <th><span class="rt">EXAM (60)</span></th> 
                        <th><span class="rt">TOTAL (100)</span></th> 
                        <th><span class="rt">GRADE</span></th> 
                        <th><span class="rt">REMARK</span></th> 
                      </tr>                       
                    </thead>                     
                    <tbody class=""> 
                      <tr data-pg-collapsed> 
                        <td class="subjects">C.R.S</td> 
                        <td> 
                          <?php echo $CRS_1;?> 
                        </td>                         
                        <td> 
                          <?php echo $CRS_2;?> 
                        </td>                         
                        <td> 
                          <?php echo $CRS_3;?> 
                        </td>                         
                        <td> 
                          <?php echo $CRS_E;?> 
                        </td>                         
                        <td> 
                          <?php echo $CRS_T;?> 
                        </td>                         
                        <td> 
                          <?php echo $CRS_G;?> 
                        </td>                         
                        <td> 
                          <?php echo $CRS_RMK;?> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">MATHEMATICS</td> 
                        <td> 
                          <?php echo $MATH_1;?> 
                        </td>                         
                        <td> 
                          <?php echo $MATH_2;?> 
                        </td>                         
                        <td> 
                          <?php echo $MATH_3;?> 
                        </td>                         
                        <td> 
                          <?php echo $MATH_E;?> 
                        </td>                         
                        <td> 
                          <?php echo $MATHS_T;?> 
                        </td>                         
                        <td> 
                          <?php echo $MATH_G;?> 
                        </td>                         
                        <td> 
                          <?php echo $MATH_RMK;?> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">BASIC SCIENCE</td> 
                        <td> 
                          <?php echo $BSC_1;?> 
                        </td>                         
                        <td> 
                          <?php echo $BSC_2;?> 
                        </td>                         
                        <td> 
                          <?php echo $BSC_3;?> 
                        </td>                         
                        <td> 
                          <?php echo $BSC_E;?> 
                        </td>                         
                        <td> 
                          <?php echo $BSC_T;?> 
                        </td>                         
                        <td> 
                          <?php echo $BSC_G;?> 
                        </td>                         
                        <td> 
                          <?php echo $BSC_RMK;?> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">ENGLISH LANGUAGE</td> 
                        <td> 
                          <?php echo $ENG_1;?> 
                        </td>                         
                        <td> 
                          <?php echo $ENG_2;?> 
                        </td>                         
                        <td> 
                          <?php echo $ENG_3;?> 
                        </td>                         
                        <td> 
                          <?php echo $ENG_E;?> 
                        </td>                         
                        <td> 
                          <?php echo $ENG_T;?> 
                        </td>                         
                        <td> 
                          <?php echo $ENG_G;?> 
                        </td>                         
                        <td> 
                          <?php echo $ENG_RMK;?> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">CIVIC-EDUCATION/POEM</td> 
                        <td> 
                          <?php echo $WR_1;?> 
                        </td>                         
                        <td> 
                          <?php echo $WR_2;?> 
                        </td>                         
                        <td> 
                          <?php echo $WR_3;?> 
                        </td>                         
                        <td> 
                          <?php echo $WR_E;?> 
                        </td>                         
                        <td> 
                          <?php echo $WR_T;?> 
                        </td>                         
                        <td> 
                          <?php echo $WR_G;?> 
                        </td>                         
                        <td> 
                          <?php echo $WR_RMK;?> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">VOCATIONAL-STUDY/HABIT</td> 
                        <td> 
                          <?php echo $HAB_1;?> 
                        </td>                         
                        <td> 
                          <?php echo $HAB_2;?> 
                        </td>                         
                        <td> 
                          <?php echo $HAB_3;?> 
                        </td>                         
                        <td> 
                          <?php echo $HAB_E;?> 
                        </td>                         
                        <td> 
                          <?php echo $HAB_T;?> 
                        </td>                         
                        <td> 
                          <?php echo $HAB_G;?> 
                        </td>                         
                        <td> 
                          <?php echo $HAB_RMK;?> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">SOCIAL STUDIES</td> 
                        <td> 
                          <?php echo $SOS_1;?> 
                        </td>                         
                        <td> 
                          <?php echo $SOS_2;?> 
                        </td>                         
                        <td> 
                          <?php echo $SOS_3;?> 
                        </td>                         
                        <td> 
                          <?php echo $SOS_E;?> 
                        </td>                         
                        <td> 
                          <?php echo $SOS_T;?> 
                        </td>                         
                        <td> 
                          <?php echo $SOS_G;?> 
                        </td>                         
                        <td> 
                          <?php echo $SOS_RMK;?> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">P.H.E</td> 
                        <td> 
                          <?php echo $PHE_1;?> 
                        </td>                         
                        <td> 
                          <?php echo $PHE_2;?> 
                        </td>                         
                        <td> 
                          <?php echo $PHE_3;?> 
                        </td>                         
                        <td> 
                          <?php echo $PHE_E;?> 
                        </td>                         
                        <td> 
                          <?php echo $PHE_T;?> 
                        </td>                         
                        <td> 
                          <?php echo $PHE_G;?> 
                        </td>                         
                        <td> 
                          <?php echo $PHE_RMK;?> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">COMPUTER STUDIES</td> 
                        <td> 
                          <?php echo $COMP_1;?> 
                        </td>                         
                        <td> 
                          <?php echo $COMP_2;?> 
                        </td>                         
                        <td> 
                          <?php echo $COMP_3;?> 
                        </td>                         
                        <td> 
                          <?php echo $COMP_E;?> 
                        </td>                         
                        <td> 
                          <?php echo $COMP_T;?> 
                        </td>                         
                        <td> 
                          <?php echo $COMP_G;?> 
                        </td>                         
                        <td> 
                          <?php echo $COMP_RMK;?> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">HOME ECONOMICS</td> 
                        <td> 
                          <?php echo $HE_1;?> 
                        </td>                         
                        <td> 
                          <?php echo $HE_2;?> 
                        </td>                         
                        <td> 
                          <?php echo $HE_3;?> 
                        </td>                         
                        <td> 
                          <?php echo $HE_E;?> 
                        </td>                         
                        <td> 
                          <?php echo $HE_T;?> 
                        </td>                         
                        <td> 
                          <?php echo $HE_G;?> 
                        </td>                         
                        <td> 
                          <?php echo $HE_RMK;?> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">FINE ARTS</td> 
                        <td> 
                          <?php echo $FA_1;?> 
                        </td>                         
                        <td> 
                          <?php echo $FA_2;?> 
                        </td>                         
                        <td> 
                          <?php echo $FA_3;?> 
                        </td>                         
                        <td> 
                          <?php echo $FA_E;?> 
                        </td>                         
                        <td> 
                          <?php echo $FA_T;?> 
                        </td>                         
                        <td> 
                          <?php echo $FA_G;?> 
                        </td>                         
                        <td> 
                          <?php echo $FA_RMK;?> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">AGRIC SCI</td> 
                        <td> 
                          <?php echo $AGR_1;?> 
                        </td>                         
                        <td> 
                          <?php echo $AGR_2;?> 
                        </td>                         
                        <td> 
                          <?php echo $AGR_3;?> 
                        </td>                         
                        <td> 
                          <?php echo $AGR_E;?> 
                        </td>                         
                        <td> 
                          <?php echo $AGR_T;?> 
                        </td>                         
                        <td> 
                          <?php echo $AGR_G;?> 
                        </td>                         
                        <td> 
                          <?php echo $AGR_RMK;?> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">VERBAL REASONING</td> 
                        <td> 
                          <?php echo $VR_1;?> 
                        </td>                         
                        <td> 
                          <?php echo $VR_2;?> 
                        </td>                         
                        <td> 
                          <?php echo $VR_3;?> 
                        </td>                         
                        <td> 
                          <?php echo $VR_E;?> 
                        </td>                         
                        <td> 
                          <?php echo $VR_T;?> 
                        </td>                         
                        <td> 
                          <?php echo $VR_G;?> 
                        </td>                         
                        <td> 
                          <?php echo $VR_RMK;?> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">Q. REASONING</td> 
                        <td> 
                          <?php echo $QR_1;?> 
                        </td>                         
                        <td> 
                          <?php echo $QR_2;?> 
                        </td>                         
                        <td> 
                          <?php echo $QR_3;?> 
                        </td>                         
                        <td> 
                          <?php echo $QR_E;?> 
                        </td>                         
                        <td> 
                          <?php echo $QR_T;?> 
                        </td>                         
                        <td> 
                          <?php echo $QR_G;?> 
                        </td>                         
                        <td> 
                          <?php echo $QR_RMK;?> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">PHONICS</td> 
                        <td> 
                          <?php echo $FO_1;?> 
                        </td>                         
                        <td> 
                          <?php echo $FO_2;?> 
                        </td>                         
                        <td> 
                          <?php echo $FO_3;?> 
                        </td>                         
                        <td> 
                          <?php echo $FO_E;?> 
                        </td>                         
                        <td> 
                          <?php echo $FO_T;?> 
                        </td>                         
                        <td> 
                          <?php echo $FO_G;?> 
                        </td>                         
                        <td> 
                          <?php echo $FO_RMK;?> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">FRENCH</td> 
                        <td> 
                          <?php echo $FR_1;?> 
                        </td>                         
                        <td> 
                          <?php echo $FR_2;?> 
                        </td>                         
                        <td> 
                          <?php echo $FR_3;?> 
                        </td>                         
                        <td> 
                          <?php echo $FR_E;?> 
                        </td>                         
                        <td> 
                          <?php echo $FR_T;?> 
                        </td>                         
                        <td> 
                          <?php echo $FR_G;?> 
                        </td>                         
                        <td> 
                          <?php echo $FR_RMK;?> 
                        </td>                         
                      </tr>                       
                    </tbody>                     
                  </table>                   
                </div>                 
              </div>               
              <div class="row" data-pg-collapsed> 
                <div class="col-xs-12"> 
                  <div class="leftentrydetails"> 
                    <div class="table-responsive"> 
                      <div class="row"> 
                        <div class="col-xs-6"> 
                          <div class="input-group"> 
                            <span class="input-group-addon schlabel">NO. OF TIMES SCHOOL OPENED</span> 
                            <?php echo $SCH_OPEN;?> 
                          </div>                           
                        </div>                         
                        <div class="col-xs-6"> 
                          <div class="input-group"> 
                            <span class="input-group-addon schlabel">NO. OF TIMES ABSENT</span> 
                            <?php echo $SCH_ABS;?> 
                          </div>                           
                        </div>                         
                      </div>                       
                      <table class="table table-condensed table-striped table-bordered table-hover"> 
                        <tbody class=""> 
                          <tr class="" data-pg-collapsed> 
                            <td class="resultdetails-td" id="resizetd">CLASS TEACHER'S REPORT</td> 
                            <td class=""> 
                              <?php echo $TEACHER_RPT;?> 
                            </td>                             
                          </tr>                           
                          <tr class=""> 
                            <td class="resultdetails-td">HEAD TEACHER'S REPORT</td> 
                            <td class=""> 
                              <?php echo $HM_REMARK;?> 
                            </td>                             
                          </tr>                           
                          <tr class=""> 
                            <td class="resultdetails-td">NEXT TERM BEGINS</td> 
                            <td class=""> 
                              <?php echo $SCH_RESUME;?> 
                            </td>                             
                          </tr>                           
                          <tr class="" data-pg-collapsed> 
                            <td class="resultdetails-td">SPECIAL SKILLS/BEHAVIOUR</td> 
                            <td class=""> 
                              <?php echo $INFO;?> 
                            </td>                             
                          </tr>                           
                          <tr class="" data-pg-collapsed> 
                            <td class="resultdetails-td">SIGNATURE</td> 
                            <td> <span id="sign"></span> </td> 
                          </tr>                           
                        </tbody>                         
                      </table>                       
                    </div>                     
                  </div>                   
                </div>                 
              </div>               
            </form>             
            <div class="pg-empty-placeholder stamp"></div>             
            <p class="resultdate"><?php echo date("d/m/Y");?></p> 
            <input type='button' value='PRINT' onclick='window.print()' id="prnnt" /> 
          </div>           
        </div>         
      </div>       
      <!-- end main -->       
      <script type="text/javascript" src="js/jquery.min.js"></script>       
      <script type="text/javascript" src="js/bootstrap.js"></script>       
      <script type="text/javascript" src="js/bootstrap.min.js"></script>       
      <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>       
      <script type="text/javascript" src="js/jquery.cycle.all.js"></script>       
    </body>     
  </html>
