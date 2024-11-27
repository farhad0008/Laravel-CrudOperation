<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
     <h1>Register page:</h1>
     <center>
        <form action="/store" method="POST" enctype="multipart/form-data">
            @csrf
            <table>
                <tr>
                    <td>Enter name:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Enter email:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>select gender:</td>
                    <td>
                        male:<input type="radio" name="gender" value="male"/>
                        female:<input type="radio" name="gender" value="female"/>
                    </td>
                </tr>
                <tr>
                    <td>Select city:</td>
                    <td>
                        <select name="city" id="">
                            <option value="surat">surat</option>
                            <option value="bardoli">bardoli</option>
                            <option value="navseri">navseri</option>
                            <option value="rajkot">rajkot</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>select hobby:</td>
                    <td>
                    cricket:<input type="checkbox" name="hobby[]" value="cricket"/>
                    hockey:<input type="checkbox" name="hobby[]" value="hockey"/>
                    swimming:<input type="checkbox" name="hobby[]" value="swimming"/>
                    </td>
                </tr>
                <tr>
                    <td>select DOB:</td>
                    <td><input type="date" name="dob"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Register"></td>
                </tr>
                <!-- <tr>
                    <td>file</td>
                    <td><input type="file" name="file"></td>
                </tr> -->
            </table>
        </form>
        <form action="/upload" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">
            <input type="submit" name="" value="upload">
        </form>
     </center>
</div>
