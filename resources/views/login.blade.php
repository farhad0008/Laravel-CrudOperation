<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
<center>
    <form action="/loginCheck" method="post">
        @csrf
        <table>
        <tr>
                <td>Enter Email:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <!-- <tr>
                <td>Enter password:</td>
                <td><input type="text" name="password"></td>
            </tr> -->
            <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</center>
</div>
