<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
     <h1>Update page:</h1>
     <center>
        <form action="/update" method="POST">
            @csrf
            <table>
                <tr>
                    <td>Enter name:</td>
                    <td><input type="text" name="name" value="{{ $employee->name}}"></td>
                </tr>
                <tr>
                    <td>Enter email:</td>
                    <td><input type="email" name="email" value="{{ $employee->email}}"></td>
                </tr>
                <tr>
                    <td>select gender:</td>
                    <td>
                        male:<input type="radio" name="gender" value="male" {{ $employee->gender=="male"?'checked':''}}/>
                        female:<input type="radio" name="gender" value="female" {{ $employee->gender=="female"?'checked':''}}/>
                    </td>
                </tr>
                <tr>
                    <td>Select city:</td>
                    <td>
                        <select name="city" id="">
                            <option value="surat" {{ $employee->city=="surat"?'selected':''}}>surat</option>
                            <option value="bardoli" {{ $employee->city=="bardoli"?'selected':''}}>bardoli</option>
                            <option value="navseri" {{ $employee->city=="navseri"?'selected':''}}>navseri</option>
                            <option value="rajkot" {{ $employee->city=="rajkot"?'selected':''}}>rajkot</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>select hobby:</td>
                    <td>
                        @php
                        $arr=explode(",",$employee->hobby);
                        @endphp
                    cricket:<input type="checkbox" name="hobby[]" value="cricket" {{ in_array('cricket',$arr)?'checked':'' }} />
                    hockey:<input type="checkbox" name="hobby[]" value="hockey" {{ in_array('hockey',$arr)?'checked':'' }} />
                    swimming:<input type="checkbox" name="hobby[]" value="swimming" {{ in_array('swimming',$arr)?'checked':'' }} />
                    </td>
                </tr>
                <tr>
                    <td>select DOB:</td>
                    <td><input type="date" name="dob" value="{{ $employee->dob}}"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update"></td>
                </tr>
                <input type="hidden" name="eid" value="{{ $employee->eid}}">
            </table>
        </form>
     </center>
</div>
