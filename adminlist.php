    <div class="main">
     <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="easyui/themes/icon.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="easyui/jquery.easyui.min.js"></script>
    
    <script type="text/javascript" src="http://www.w3cschool.cc/try/jeasyui/datagrid-detailview.js"></script> 
    <!--add details to each records-->
    <style type="text/css">
        input{
            border: 1px solid #ccc;
        }
    </style>


    <div id="tt" class="easyui-tabs" style="width:auto;height:auto;">

        <div title="Not Confirmed Records" style="padding:20px;display:none;">
            
            <div id="reviewerToolbar">
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="opendlg()">Open dialog to edit selected record</a>
            </div>
            

            <table id="dg" class="easyui-datagrid" title="Not Confirmed Records" style="width:auto;height:auto"
                toolbar="#toolbar" pagination="true"  
                rownumbers="true" data-options="remoteSort:false,singleSelect:true,collapsible:true,url:'getNotCfmRecordsInJson.php',method:'get',remoteFilter:false">
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
            <tr><td colspan="2" style="font-weight: bold;">These forms are mandatory:</td></tr>
            <tr> <td>Title:</td> <td><input required="true" class="easyui-validatebox" type="text" size=50 name="title"></td> </tr>

            <tr> <td>Format:</td> <td><select name="format" required="true" class="easyui-combobox"><option value="C">Conference(C)</option><option value="J">Journals(J)</option><option value="DT">Dissertations/Thesis(DT)</option><option value="R">Research papers(R)</option></select> </td> </tr>

            <tr> <td>Year:</td> <td><input required="true" class="easyui-validatebox" name="year" type="text" size="4" maxlength="4" onkeyup='this.value=this.value.replace(/\D/gi,"")'></td> </tr>

            <tr> <td>Author1:</td> <td><input required="true" class="easyui-validatebox" name="author1" type="text" size="50"></td> </tr>
            

            <tr> <td>Country:</td> <td><input required="true" class="easyui-validatebox" type="text" name="country" size="50"></td> </tr>

            <tr> <td>Insititusion:</td> <td><input required="true" class="easyui-validatebox" type="text" name="conference" size="50"></td> </tr>

            <tr> <td>Location:</td> <td><input required="true" class="easyui-validatebox" type="text" name="location" size="50"></td> </tr>

            <tr> <td>Method1:</td> <td><input required="true" class="easyui-validatebox" type="text" name="method1" size="50"></td> </tr>
            

            <tr> <td>Source:</td> <td><input required="true" class="easyui-validatebox" type="text" name="source" size="50"></td> </tr>

            <tr> <td>Abstract:</td> <td> <textarea required="true" class="easyui-validatebox" cols="49" rows="4" id="regintro" name="abstract"></textarea></td> </tr>

            <tr> <td>Class1:</td> <td><input required="true" class="easyui-validatebox" type="text" name="class1" size="50"></td> </tr>

            <tr> <td>Confirm?</td> <td><select name="auth" required="true" class="easyui-combobox"><option value="0">Confirmed</option><option value="1">Not Confirmed</option><option value="2">Deleted</option></select> </td> </tr>

        </table>
        
        <table class="table-right" >
        <tr><td colspan="2" style="font-weight: bold;">These forms are optional:</td></tr>

            <tr> <td>Role1:</td> <td><input  class="easyui-validatebox" name="role1" type="text" size="50"></td> </tr>
            <tr> <td>Affliation1:</td> <td><input  class="easyui-validatebox" name="affliation1" type="text" size="50"></td> </tr>

            <tr> <td>Author2:</td> <td><input class="easyui-validatebox" name="author2" type="text" size="50"></td> </tr>
            <tr> <td>Role2:</td> <td><input class="easyui-validatebox" name="role2" type="text" size="50"></td> </tr>
            <tr> <td>Affliation2:</td> <td><input class="easyui-validatebox" name="affliation2" type="text" size="50"></td> </tr>

            <tr> <td>Author3:</td> <td><input class="easyui-validatebox" name="author3" type="text" size="50"></td> </tr>
            <tr> <td>Role3:</td> <td><input class="easyui-validatebox" name="role3" type="text" size="50"></td> </tr>
            <tr> <td>Affliation3:</td> <td><input class="easyui-validatebox" name="affliation3" type="text" size="50"></td> </tr>

            <tr> <td>Author4:</td> <td><input class="easyui-validatebox" name="author4" type="text" size="50"></td> </tr>
            <tr> <td>Role4:</td> <td><input class="easyui-validatebox" name="role4" type="text" size="50"></td> </tr>
            <tr> <td>Affliation4:</td> <td><input class="easyui-validatebox" name="affliation4" type="text" size="50"></td> </tr>

            <tr> <td>Author5:</td> <td><input class="easyui-validatebox" name="author5" type="text" size="50"></td> </tr>
            <tr> <td>Role5:</td> <td><input class="easyui-validatebox" name="role5" type="text" size="50"></td> </tr>
            <tr> <td>Affliation5:</td> <td><input class="easyui-validatebox" name="affliation5" type="text" size="50"></td> </tr>

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
                        onclick="javascdript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
                </div>
            </div>
            
        </div>



    <div title="Deleted Records" data-options="closable:false" style="overflow:auto;padding:20px;display:none;">
       tab2
    </div>


    <div title="Confirmed Records" data-options="closable:false" style="padding:20px;display:none;">
        tab3
    </div>

    <div title="All Records" data-options="closable:false" style="padding:20px;display:none;">
        tab4
    </div>


</div>

</div>
    


    <script type="text/javascript" src="easyui/datagrid-filter.js"></script>
    <script type="text/javascript">
        
        // Create filter to search data
        $(function(){
             var dg = $('#dg');
            dg.datagrid();  // create datagrid
            dg.datagrid('enableFilter', [{
                field:'year',
                type:'numberbox',
                options:{precision:1},
                op:['equal','notequal','less','greater']
            },{
                field:'format',
                type:'combobox',
                options:{
                    panelHeight:'auto',
                    data:[{value:'',text:'All'},{value:'C',text:'Conference(C)'},{value:'J',text:'Journal(J)'},{value:'R',text:'Research Paper(R)'},{value:'DT',text:'Dissertation/Thesis'}],
                    onChange:function(value){
                        if (value == ''){
                            dg.datagrid('removeFilterRule', 'format');
                        } else {
                            dg.datagrid('addFilterRule', {
                                field: 'format',
                                op: 'equal',
                                value: value
                            });
                        }
                        dg.datagrid('doFilter');
                    }
                }
            }]);
            
        });


        // Get details by expanding records
        $('#dg').datagrid({
            view: detailview,
            detailFormatter:function(index,row){
                return '<div class="ddv"></div>';
            },
            onExpandRow: function(index,row){
                var ddv = $(this).datagrid('getRowDetail',index).find('div.ddv');
                var rows = $('#dg').datagrid('getData').rows[index];
                ddv.panel({
                    border:false,
                    cache:false,
                    href:'data_getdetail.php?id='+rows.id,
                    onLoad:function(){
                        $('#dg').datagrid('fixDetailRowHeight',index);
                    }
                });
                $('#dg').datagrid('fixDetailRowHeight',index);
            }
        });


        // open dialogs
        function opendlg() {
            var row = $('#dg').datagrid('getSelected');
            //alert(row.id);
            if (row) {
                $('#dlg').dialog('open');
                $('#detail-form').form('load', 'data_updatedetail.php?id='+row.id);
                //url = 'data_updatedetail.php?id=' + row.id;
            } else
                alert('Please select a reviewer first');
        }


        // save updates
        function saveUpdate(){
            url = 'saveUpdate.php';
             $('#detail-form').form('submit', {
                    url: url,
                    onSubmit: function () {
                        return $(this).form('validate');
                    },
                    success: function (result) {
                        var result = eval('(' + result + ')');
                        if (result.errorMsg) {
                            $.messager.show({
                                title: 'Error',
                                msg: result.errorMsg
                            });
                        } else {

                            $('#detail-form').dialog('close');      // close the dialog
                            $('#detail-form').datagrid('reload'); // reload the user data
                        }
                    }
                });
        }

    
    </script>

	


