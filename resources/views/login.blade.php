@extends('app')

@section('content')

    <!-- login form -->
    <div class="form">
        <div class="head_txt">
            <h3>Login User Information</h3>
        </div>
        <div class="login">
            <div class="user_login">
                <a href="#" class="btn_01 id_01 c_04">USER</a>
                <a href="#" class="btn_01 id_02">PASSWORD</a>
            </div>
        </div>
        <div class="form_inner inner-content">
            <form action="" method="" class="login_form item_01">
                <div class="form_group">
                    <label>User</label>
                    <input type="text">
                </div>
                <div class="form_group">
                    <label>Email Address</label>
                    <input type="text">
                </div>
                <div class="form_group">
                    <label>SMS No</label>
                    <input type="text">
                </div>
                <div class="form_group">
                    <label>Employee</label>
                    <div class="select_box">
                        <select required>
                            <option value="" disabled selected>select box</option>
                            <option>first</option>
                            <option>second</option>
                            <option>third</option>
                        </select>
                    </div>
                </div>
                <div class="check">
                    <label>Activation<input type="checkbox" name="checkbox" checked></label>
                    <label>Reset<input type="checkbox" name="checkbox"></label>
                </div>
            </form>
            <form action="" method="" class="login_form item_02">
                <div class="form_group">
                    <label>Password</label>
                    <input type="password">
                </div>
                <div class="form_group">
                    <label>Retype Password</label>
                    <input type="password">
                </div>
            </form>
            <div class="submit_btn">
                <button class="btn_02">Create</button>
            </div>
        </div>
    </div>
    <!-- end login form -->

@endsection