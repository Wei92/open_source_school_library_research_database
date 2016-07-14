    <div class="main">
     <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="easyui/themes/icon.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="easyui/jquery.easyui.min.js"></script>
    
    <script type="text/javascript" src="http://www.w3cschool.cc/try/jeasyui/datagrid-detailview.js"></script> 
    <!--add details to each records-->

	
    <div id="tt" class="easyui-tabs" style="width:auto;height:auto;">

        <div title="Not Confirmed Records" style="padding:20px;display:none;">
            <table id="dg" class="easyui-datagrid" title="OSSLRD" style="width:auto;height:auto"
                toolbar="#toolbar" pagination="true"  
                rownumbers="true" data-options="remoteSort:false,singleSelect:true,collapsible:true,url:'getadminlist.php',method:'get',remoteFilter:false">
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

                        <!--<th data-options="field:'auth'" sortable="false">auth</th>-->
                    </tr>
            </thead>
            </table>
        </div>



    <div title="Deleted Records" data-options="closable:false" style="overflow:auto;padding:20px;display:none;">
        tab2
    </div>


    <div title="Confirmed Records" data-options="closable:false" style="padding:20px;display:none;">
        tab3
    </div>

    <div title="All Records" data-options="closable:false" style="padding:20px;display:none;">
        tab3
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
    
    </script>

	


