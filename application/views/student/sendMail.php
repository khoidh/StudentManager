<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: khoidh-->
<!-- * Date: 3/16/2018-->
<!-- * Time: 11:29 AM-->
<!-- */-->
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<!---->
<!--<head runat="server">-->
<!--</head>-->
<form  method="post" enctype="multipart/form-data" action="<?php echo base_url('student/sendMail/'.$id);?>">
<!--    <form  method="post" id="form1" runat="server">-->
    <div>
     <table width="600px" align="center">
            <tr>
                <td colspan="2" align="center"><b>Send Mail</b></td>
            </tr>
            <tr>
                <td> To </td>
                <td> <input type="text" name="mail" value="<?php echo $mail ?>"> </td>
            </tr>
            <tr>
                <td> Subject </td>
                <td> <input type="text" name="subject" value="" Width="400"> </td>
            </tr>
            <tr>
                 <td> Message </td>
                 <td> <input type="text" cols="40" rows="5" style="width:200px; height:50px;" name="message" id="message" value=""> </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit"  name="btSend" value="Send"></td>
            </tr>
<!--            <tr>-->
<!--             <td colspan="2" align="center"> <asp:Button ID="btnSubmit" runat="server" OnClick="btnSubmit_Click" Text="Send" /> </td>-->
<!--            </tr>-->
<!--            <tr>
            <td colspan="2"><asp:Label ID="lblMsg" runat="server" ></asp:Label> </td>
            </tr>-->
      </table>
    </div>
    </form>


