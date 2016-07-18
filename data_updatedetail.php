<?php
	include 'DBConn.php';

	$id = $_REQUEST['id'];
	$query = "select * from libdb2 where id='$id'";
	if (!$res = DBConn::getConnection()->query($query)) {
        die('There was an error running the query [' . $query->error . ']');
    }
    $row = $res->fetch_assoc();
    echo json_encode($row);
    
    /*echo '<div class="data_detail">';
    
    echo '<table style="background:#ffd9db;margin:0px 1px;padding-bottom:10px" class="table-left">';

                echo '<tr><td>Title:</td><td><input required="true" class="easyui-validatebox" type="text" name="title" size="50" value="'.$row['title'].'"></td></tr>';
                if ($row['format']=="C") {
                    echo '<tr><td>Format:</td><td> 
                <select name="format" required="true" class="easyui-combobox">
                    <option value="C" selected="selected">Conference(C)</option>
                    <option value="J">Journals(J)</option>
                    <option value="DT">Dissertations/Thesis(DT)</option>
                    <option value="R">Research papers(R)</option>
                </select>
                </td></tr>';
                }elseif ($row['format']=="J") {
                    echo '<tr><td>Format:</td><td> 
                <select name="format" required="true" class="easyui-combobox">
                    <option value="C">Conference(C)</option>
                    <option value="J" selected="selected">Journals(J)</option>
                    <option value="DT">Dissertations/Thesis(DT)</option>
                    <option value="R">Research papers(R)</option>
                </select>
                </td></tr>';
                }elseif ($row['format']=="R") {
                    echo '<tr><td>Format:</td><td> 
                <select name="format" required="true" class="easyui-combobox">
                    <option value="C">Conference(C)</option>
                    <option value="J" selected="selected">Journals(J)</option>
                    <option value="DT">Dissertations/Thesis(DT)</option>
                    <option value="R" selected="selected" >Research papers(R)</option>
                </select>
                </td></tr>';
                }elseif ($row['format']=="DT") {
                    echo '<tr><td>Format:</td><td> 
                <select name="format" required="true" class="easyui-combobox">
                    <option value="C">Conference(C)</option>
                    <option value="J">Journals(J)</option>
                    <option value="DT" selected="selected">Dissertations/Thesis(DT)</option>
                    <option value="R">Research papers(R)</option>
                </select>
                </td></tr>';
                }else{
                    echo '<tr><td>Format:</td><td> 
                <select name="format" required="true" class="easyui-combobox">
                    <option value="C" selected="selected">Conference(C)</option>
                    <option value="J">Journals(J)</option>
                    <option value="DT">Dissertations/Thesis(DT)</option>
                    <option value="R">Research papers(R)</option>
                </select>
                </td></tr>';
                }
                echo '<tr><td>Year:</td><td><input required="true" class="easyui-validatebox" type="text" name="year" size="50" value="'.$row['year'].'"></td></tr>';
                echo '<tr><td>Author1:</td><td> <input  required="true" class="easyui-validatebox"type="text" name="author1" size="50" value="'.$row['author1'].'"></td></tr>';
                echo '<tr><td>Country:</td><td> <input  required="true" class="easyui-validatebox"type="text" name="country" size="50" value="'.$row['country'].'"></td></tr>';
                echo '<tr><td>Insititustion:</td><td> <input  required="true" class="easyui-validatebox" type="text" name="conference" size="50" value="'.$row['conference'].'"></td></tr>';
                echo '<tr><td>Location:</td><td> <input required="true" class="easyui-validatebox" type="text" name="location" size="50" value="'.$row['location'].'"></td></tr>';
                echo '<tr><td>Method1:</td><td> <input required="true" class="easyui-validatebox" type="text" name="method1" size="50" value="'.$row['year'].'"></td></tr>';
                echo '<tr><td>Source:</td><td> <input required="true" class="easyui-validatebox" type="text" name="abstract" size="50" value="'.$row['source'].'"></td></tr>';
                echo '<tr><td>Abstract:</td><td> <textarea required="true" class="easyui-validatebox" cols="49" rows="4" name="abstract" size="50">'.$row['abstract'].'</textarea></td></tr>';
                echo '<tr><td>Class1:</td><td> <input required="true" class="easyui-validatebox" type="text" name="class1" size="50" value="'.$row['class1'].'"></td></tr>';

                if ($row['auth']=="0") {
                    echo '<tr><td>Edit the status of record:</td><td> 
                <select name="auth">
                    <option value="0" selected="selected">Confirmed</option>
                    <option value="1">Not confirmed</option>
                    <option value="2">Deleted</option>
                </select>
                </td></tr>';
                }elseif ($row['auth']=="1") {
                     echo '<tr><td>Edit the status of record:</td><td> 
                <select name="auth">
                    <option value="0">Confirmed</option>
                    <option value="1" selected="selected">Not confirmed</option>
                    <option value="2">Deleted</option>
                </select>
                </td></tr>';
                }elseif ($row['auth']=="2") {
                     echo '<tr><td>Edit the status:</td><td> 
                <select name="auth">
                    <option value="0">Confirmed</option>
                    <option value="1">Not confirmed</option>
                    <option value="2"  selected="selected">Deleted</option>
                </select>
                </td></tr>';
                }

    echo "</table>";

    echo '<table style="background:#eee;margin:10px 1px" class="table-right">';
                echo '<tr><td>Role1:</td><td> <input type="text" name="role1" size="50" value="'.$row['role1'].'"></td></tr>';
                echo '<tr><td>Affliation1:</td><td> <input type="text" name="affiliation1" size="50" value="'.$row['affiliation1'].'"></td></tr>';

                echo '<tr><td>Author2:</td><td> <input type="text" name="author2" size="50" value="'.$row['author2'].'"></td></tr>';
                echo '<tr><td>Role2:</td><td> <input type="text" name="role2" size="50" value="'.$row['role2'].'"></td></tr>';
                echo '<tr><td>Affliation2:</td><td> <input type="text" name="affiliation2" size="50" value="'.$row['affiliation2'].'"></td></tr>';

                echo '<tr><td>Author3:</td><td> <input type="text" name="author3" size="50" value="'.$row['author3'].'"></td></tr>';
                echo '<tr><td>Role3:</td><td> <input type="text" name="role3" size="50" value="'.$row['role3'].'"></td></tr>';
                echo '<tr><td>Affliation3:</td><td> <input type="text" name="affiliation3" size="50" value="'.$row['affiliation3'].'"></td></tr>';

                echo '<tr><td>Author4:</td><td> <input type="text" name="author4" size="50" value="'.$row['author4'].'"></td></tr>';
                echo '<tr><td>Role4:</td><td> <input type="text" name="role4" size="50" value="'.$row['role4'].'"></td></tr>';
                echo '<tr><td>Affliation4:</td><td> <input type="text" name="affiliation4" size="50" value="'.$row['affiliation4'].'"></td></tr>';

                echo '<tr><td>Author5:</td><td> <input type="text" name="author5" size="50" value="'.$row['author5'].'"></td></tr>';
                echo '<tr><td>Role5:</td><td> <input type="text" name="role1" size="50" value="'.$row['role5'].'"></td></tr>';
                echo '<tr><td>Affliation5:</td><td> <input type="text" name="affiliation5" size="50" value="'.$row['affiliation5'].'"></td></tr>';

                echo '<tr><td>Method2:</td><td> <input type="text" name="method2" size="50" value="'.$row['method2'].'"></td></tr>';
                echo '<tr><td>Method3:</td><td> <input type="text" name="method3" size="50" value="'.$row['method3'].'"></td></tr>';
                echo '<tr><td>Class2:</td><td> <input type="text" name="class2" size="50" value="'.$row['class2'].'"></td></tr>';
                echo '<tr><td>Class3:</td><td> <input type="text" name="class3" size="50" value="'.$row['class3'].'"></td></tr>';

    echo "</table>";
    echo '
        <div class="clear"></div>
    ';
    echo "</div>";*/

?>


