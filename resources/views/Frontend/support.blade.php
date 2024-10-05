@extends('Frontend/layout.app')

@section('content')
@include('Frontend/layout/header')

<div class="global_wrap">
    <div class="clearall"></div>
    <div class="middle_wrap clearfix">
        <div class="wrap">
            <div class="sidebar" id="lsidebar">
                @include('Frontend/layout/lsidebar')
            </div>
            <!-- content -->
            <div class="content clearfix" bis_skin_checked="1">

                <h3>Support Form</h3>




                <script type="text/javascript">
                    function checkform() {
                  if (document.mainform.name.value == '') {
                    alert("Please type your full name!");
                    document.mainform.name.focus();
                    return false;
                  }
                  if (document.mainform.email.value == '') {
                    alert("Please enter your e-mail address!");
                    document.mainform.email.focus();
                    return false;
                  }
                  if (document.mainform.message.value == '') {
                    alert("Please type your message!");
                    document.mainform.message.focus();
                    return false;
                  }
                  return true;
                }

                </script>

                <form method="post" name="mainform" onsubmit="return checkform()" action="">
                    <input type="hidden" name="a" value="support">
                    <input type="hidden" name="action" value="send">

                    <table class="form">
                        <tbody>
                            <tr>
                                <th>Your Name:</th>
                                <td><input type="text" name="name" value=""></td>
                            </tr>
                            <tr>
                                <th>Your E-mail:</th>
                                <td><input type="text" name="email" value=""></td>
                            </tr>
                            <tr>
                                <th>Message:</th>
                                <td><textarea name="message" cols="45" rows="4"></textarea></td>
                            </tr>
                            <tr>
                                <th><img src="https://trading-hyips.com/turing/PHPSESSID/sao45u7b6ap1arsvjdurnpspt3/r/38994/"
                                        alt="turing code"></th>
                                <td><input type="text" name="turing" maxlength="6" size="6"></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td><input type="submit" value="Submit"></td>
                            </tr>
                        </tbody>
                    </table>
                </form>


            </div>
            <!-- content -->
            <div class="sidebar" id="rsidebar">
                @include('Frontend/layout/rsidebar')
            </div>
        </div>
    </div>
    @endsection
