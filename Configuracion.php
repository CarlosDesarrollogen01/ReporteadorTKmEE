<?php
    $SERVIDOR = 'secure.emailsrvr.com';
    $PUERTO = 465;
    $CORREO_EMISOR = 'carlos.hernandez@tkme.net';
    $CORREO_EMISOR_NOMBRE = 'Carlos Hernandez Alvarez';
    $CORREO_EMISOR_CLAVE = 'T3k$4rL4Bs..';
    $ASUNTO = 'TKmE :: Envio automatico de correo';   
    
    $MENSAJE = 'MENSAJE DE PRUEBA';
       
    $PLANTILLA_HTML = '<html xmlns="http://www.w3.org/1999/xhtml">
                       <head>                       
                       <style>                       
                       .negritas{                           
                           text-align: center;
                           font-family: Verdana, sans-serif;
                           font-size:14px;
                           font-weight: bold;
                       }
                       .normal{
                           text-align: center;
                           font-family: Verdana, sans-serif;
                           font-size:14px;
                          
                       }
                       .titulo{
                           color:white;
                           text-align: center;
                           font-family: "Arial", Helvetica, sans-serif;
                           font-size:18px;
                           font-weight: bold;
                       }
                       
                       .texto{                           
                           text-align: center;
                           font-family: "Arial", Helvetica, sans-serif;
                           font-size:17px;                                                                               
                       }
                       </style>
                       </head>
                       <body>
                            <div>                       
                                <p align="center"> 
                                    <font class="negritas"> TKmE monitoreo SAPI de CV </font> </p>
                            </div>
                            <br/>                                                        
                            <div align="center">
                                <p align="Justify" class="texto">' .
                                  $_SESSION['CUERPO']            
                               . '</p>
                            </div>
                           
                            <br/>
                            <table width="100%" border="1" cellpading="5" cellspacing="0">
                                <tr>
                                    <td class="titulo" bgcolor="gray">
                                         Hora
                                    </td>                                     
                                    <td class="titulo" bgcolor="gray">
                                         Descripción
                                    </td>
                                </tr>
                                <tr>
                                    <td class="texto">
                                     30/12/2014 11:44:12
                                    </td>
                                    <td class="texto">
                                     Alerta de temperatura alta en MPO01 con 26 C con un rango de 0 a 25 C.
                                    </td>                            
                                </tr>   
                                <td colspan=2>
                                    <img src="http://localhost/PHPMailer/T9_08052014_203305.jpg" alt="THIS IS THE IMAGE" width="1000px" height="100px" />
                                </td>
                            </table> 
                           
                       </body>            
                       </html>';
?>  
