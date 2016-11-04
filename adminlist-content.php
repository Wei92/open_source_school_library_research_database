 <thead>
                    <tr>
                        <th data-options="field:'id'" sortable="true"  >ID</th>
                        <th data-options="field:'title'" sortable="true"   >Title</th>
                        <th data-options="field:'format'" sortable="true"   >Format</th>
                        <th data-options="field:'year'" sortable="true"   >Year</th>

                        <th data-options="field:'author1'" sortable="true"   >Author1</th>
                        <th data-options="field:'role1'" sortable="true"   >Role1</th>
                        <th data-options="field:'affiliation1'" sortable="true"   >Affiliation1</th>

                        <th data-options="field:'country'" sortable="true"   >Country</th>
                        <th data-options="field:'conference'" sortable="true"   >Conference</th>
                        <th data-options="field:'location'" sortable="true"   >Location</th>

                        <th data-options="field:'method1'" sortable="true"   >Method1</th>
                        <th data-options="field:'method2'" sortable="true"   >Method2</th>
                        <th data-options="field:'method3'" sortable="true"   >Method3</th>

                        <th data-options="field:'class1'" sortable="true"   >Class1</th>
                        <th data-options="field:'class2'" sortable="true"   >Class2</th>
                        <th data-options="field:'class3'" sortable="true"   >Class3</th>
                    </tr>
            </thead>
            </table>

            <div id="dlg" class="easyui-dialog" style="top:10%;width:1090px;height:510px;padding:0 20px;"
             closed="true" buttons="#reviewer-dlg-buttons">

                <form id="detail-form" method="post">
                    <table class="table-left">
            <tr><td colspan="2" style="font-weight: bold;">These fields are mandatory:</td></tr>
            <tr> <td>Title:</td> <td><input required="true" class="easyui-validatebox" type="text" size=50 name="title"></td> </tr>

            <tr> <td>Format:</td> <td><select name="format" required="true" class="easyui-combobox"><option value="C" <?php if($_GET['format'] == 'C'){echo 'selected="selected"';} ?>>Conference(C)</option><option value="J" <?php if($_GET['format'] == 'J'){echo 'selected="selected"';} ?> >Journals(J)</option><option value="DT" <?php if($_GET['format'] == 'DT'){echo 'selected="selected"';} ?> >Dissertations/Thesis(DT)</option><option value="R"<?php if($_GET['format'] == 'R'){echo 'selected="selected"';} ?> >Research papers(R)</option></select> </td> </tr>

            <tr> <td>Year:</td> <td><input required="true" class="easyui-validatebox" name="year" type="text" size="4" maxlength="4" onkeyup='this.value=this.value.replace(/\D/gi,"")'></td> </tr>

            <tr> <td>Author1:</td> <td><input required="true" class="easyui-validatebox" name="author1" type="text" size="50"></td> </tr>
            

            <tr> <td>Country:</td> <td><input required="true" class="easyui-validatebox" type="text" name="country" size="50"></td> </tr>

            <tr> <td>Institution:</td> <td><input required="true" class="easyui-validatebox" type="text" name="conference" size="50"></td> </tr>

            <tr> <td>Location:</td> <td><input required="true" class="easyui-validatebox" type="text" name="location" size="50"></td> </tr>

            <tr> <td>Method1:</td> <td><input required="true" class="easyui-validatebox" type="text" name="method1" size="50"></td> </tr>
            

            <tr> <td>Source:</td> <td><input required="true" class="easyui-validatebox" type="text" name="source" size="50"></td> </tr>

            <tr> <td>Abstract:</td> <td> <textarea required="true" class="easyui-validatebox" cols="49" rows="4" id="regintro" name="abstract"></textarea></td> </tr>

            <tr> <td>Class1:</td> <td><input required="true" class="easyui-validatebox" type="text" name="class1" size="50"></td> </tr>

            <tr> <td>Confirm?</td> <td><select name="auth" required="true" class="easyui-combobox"><option value="0" >Confirmed</option><option value="1" >Not Confirmed</option><option value="2"  >Deleted</option></select> </td> </tr>


        </table>
        
        <table class="table-right" >
        <tr><td colspan="2" style="font-weight: bold;">These fields are optional:</td></tr>

            <tr> <td>Role1:</td> <td><input  class="easyui-validatebox" name="role1" type="text" size="50"></td> </tr>
            <tr> <td>Affiliation1:</td> <td><input  class="easyui-validatebox" name="affiliation1" type="text" size="50"></td> </tr>

            <tr> <td>Author2:</td> <td><input class="easyui-validatebox" name="author2" type="text" size="50"></td> </tr>
            <tr> <td>Role2:</td> <td><input class="easyui-validatebox" name="role2" type="text" size="50"></td> </tr>
            <tr> <td>Affiliation2:</td> <td><input class="easyui-validatebox" name="affiliation2" type="text" size="50"></td> </tr>

            <tr> <td>Author3:</td> <td><input class="easyui-validatebox" name="author3" type="text" size="50"></td> </tr>
            <tr> <td>Role3:</td> <td><input class="easyui-validatebox" name="role3" type="text" size="50"></td> </tr>
            <tr> <td>Affiliation3:</td> <td><input class="easyui-validatebox" name="affiliation3" type="text" size="50"></td> </tr>

            <tr> <td>Author4:</td> <td><input class="easyui-validatebox" name="author4" type="text" size="50"></td> </tr>
            <tr> <td>Role4:</td> <td><input class="easyui-validatebox" name="role4" type="text" size="50"></td> </tr>
            <tr> <td>Affiliation4:</td> <td><input class="easyui-validatebox" name="affiliation4" type="text" size="50"></td> </tr>

            <tr> <td>Author5:</td> <td><input class="easyui-validatebox" name="author5" type="text" size="50"></td> </tr>
            <tr> <td>Role5:</td> <td><input class="easyui-validatebox" name="role5" type="text" size="50"></td> </tr>
            <tr> <td>Affiliation5:</td> <td><input class="easyui-validatebox" name="affiliation5" type="text" size="50"></td> </tr>

            <tr> <td>Method2:</td> <td><input class="easyui-validatebox" type="text" name="method2" size="50"></td> </tr>
            <tr> <td>Method3:</td> <td><input  class="easyui-validatebox" type="text" name="method3" size="50"></td> </tr>

            <tr> <td>Class2:</td> <td><input class="easyui-validatebox" type="text" name="class2" size="50"></td> </tr>
            <tr> <td>Class3:</td> <td><input class="easyui-validatebox" type="text" name="class3" size="50"></td> </tr>
        </table>
        <div class="clear"></div>
                </form>
                <div id="saveEdit">
                    <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUpdate()"
                           style="width:90px">Save</a>
                    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel"
                        onclick="javascdript:$('#dlg').dialog('close')" style="width:90px">Close</a>
                    <span style="color:red;" id="savealert">a</span>
                </div>
            </div>