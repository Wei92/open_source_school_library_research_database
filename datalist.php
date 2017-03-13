    <link rel="stylesheet" type="text/css" href="easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="easyui/themes/icon.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="easyui/jquery.easyui.min.js"></script>
    
    <script type="text/javascript" src="easyui/datagrid-detailview.js"></script> 





    <table id="dg" class="easyui-datagrid" title="OSSLRD" style="width:auto;height:auto;"
            toolbar="#toolbar" pagination="true"  
            rownumbers="true" data-options="remoteSort:false,singleSelect:true,collapsible:true,url:'getCfmRecordsInJson.php',method:'get',remoteFilter:false">
        

        <thead frozen="true">
            <tr>
                <th data-options="field:'id'" sortable="true"  >ID</th>
            </tr>
        </thead>

        <thead>
            <tr>
                
                <th data-options="field:'title'" width="500" sortable="true"   >Title</th>
                <th data-options="field:'format'" sortable="true" width="70"  >Format</th>
                <th data-options="field:'year'" sortable="true"   >Year</th>

                <th data-options="field:'author1'" sortable="true"   >Author1</th>
                <th data-options="field:'role1'" width="250" sortable="true"   >Role1</th>
                <th data-options="field:'affiliation1'" width="250" sortable="true"   >Affiliation1</th>

                <th data-options="field:'author2'" sortable="true"   >Author2</th>
                <th data-options="field:'role2'" width="250" sortable="true"  >Role2</th>
                <th data-options="field:'affiliation2'" width="250" sortable="true"  >Affiliation2</th>

                <!--<th data-options="field:'author3'" sortable="true"  >Author3</th>
                <th data-options="field:'role3'" sortable="true"  >Role3</th>
                <th data-options="field:'affiliation3'" sortable="true"  >Affiliation3</th>

                <th data-options="field:'author4'" sortable="true"  >Author4</th>
                <th data-options="field:'role4'" sortable="true"  >Role4</th>
                <th data-options="field:'affiliation4'" sortable="true"  >Affiliation4</th>

                <th data-options="field:'author5'" sortable="true"  >Author5</th>
                <th data-options="field:'role5'" sortable="true"  >Role5</th>
                <th data-options="field:'affiliation5'" sortable="true"  >Affiliation5</th>-->

                <th data-options="field:'country'" sortable="true"  >Country</th>
                <th data-options="field:'conference'" sortable="true"  >Conference</th>
                <th data-options="field:'location'" sortable="true"  >Location</th>

                <th data-options="field:'method1'" sortable="true"  >Method1</th>
                <th data-options="field:'method2'" sortable="true"  >Method2</th>
                <th data-options="field:'method3'" sortable="true"  >Method3</th>

                <!--<th data-options="field:'source'" sortable="true"  >Source</th>-->
                <!--<th data-options="field:'abstract'" sortable="true"  >Abstract</th>-->

                <th data-options="field:'class1'" sortable="true"  >Class1</th>
                <th data-options="field:'class2'" sortable="true"  >Class2</th>
                <th data-options="field:'class3'" sortable="true"  >Class3</th>

                <!--<th data-options="field:'auth'" sortable="false">auth</th>-->
            </tr>
        </thead>
    </table>

        <!-- search button
        <div id="toolbar" style="padding:3px">
            <table>
                <tr>
                    <th>
                        <span>Author:</span>
                        <input id="s_author" style="line-height:20px;border:1px solid #ccc">
                    </th>
                    <th>
                        <span>Method:</span>
                        <input id="s_method" style="line-height:20px;border:1px solid #ccc">
                    </th>
                    <th>
                        <span>Category:</span>
                        <input id="s_class" style="line-height:20px;border:1px solid #ccc">
                    </th>
                    <th>
                        <span>Search in abstract:</span>
                        <input id="s_abstract" style="line-height:20px;border:1px solid #ccc">
                    </th>
                </tr>
            </table>
            
            <a href="#" class="easyui-linkbutton" plain="true" onclick="doSearch()">Search</a>
        </div>
		-->

    <script type="text/javascript" src="easyui/datagrid-filter.js"></script>
    <script type="text/javascript">
        
        // Create filter to search data
        $(function(){
             var dg = $('#dg');
            dg.datagrid({
                rownumbers:false,
                pageSize:100,
                pageList:[100,200,300],
            });  // create datagrid
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
        
        // search on the top
       // function doSearch(){
		//	$('#dg').datagrid('load',{
		//		s_author: $('#s_author').val(),
		//	});
		//}
    
    </script>

    


