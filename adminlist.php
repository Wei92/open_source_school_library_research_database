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
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick='opendlg("1")'>Open dialog to edit selected record</a>
            </div>
            <table id="dg1" class="easyui-datagrid" title="Not Confirmed Records" style="width:auto;height:auto"
                toolbar="#toolbar" pagination="true"  
                rownumbers="true" data-options="remoteSort:false,singleSelect:true,collapsible:true,url:'getNotCfmRecordsInJson.php',method:'get',remoteFilter:false">
               <?php include 'adminlist-content.php' ?>       
        </div>



    <div title="Deleted Records" data-options="closable:false" style="overflow:auto;padding:20px;display:none;">
       <div id="reviewerToolbar">
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick='opendlg("2")'>Open dialog to edit selected record</a>
            </div>
            <table id="dg2" class="easyui-datagrid" title="Not Confirmed Records" style="width:auto;height:auto"
                toolbar="#toolbar" pagination="true"  
                rownumbers="true" data-options="remoteSort:false,singleSelect:true,collapsible:true,url:'getDltRecordsInJson.php',method:'get',remoteFilter:false">
               <?php include 'adminlist-content.php' ?> 
    </div>


    <div title="Confirmed Records" data-options="closable:false" style="padding:20px;display:none;">
        <div id="reviewerToolbar">
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick='opendlg("3")'>Open dialog to edit selected record</a>
            </div>
            <table id="dg3" class="easyui-datagrid" title="Not Confirmed Records" style="width:auto;height:auto"
                toolbar="#toolbar" pagination="true"  
                rownumbers="true" data-options="remoteSort:false,singleSelect:true,collapsible:true,url:'getCfmRecordsInJson.php',method:'get',remoteFilter:false">
               <?php include 'adminlist-content.php' ?> 
    </div>

    <div title="All Records" data-options="closable:false" style="padding:20px;display:none;">
        <div id="reviewerToolbar">
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick='opendlg("4")'>Open dialog to edit selected record</a>
            </div>
            <table id="dg4" class="easyui-datagrid" title="Not Confirmed Records" style="width:auto;height:auto"
                toolbar="#toolbar" pagination="true"  
                rownumbers="true" data-options="remoteSort:false,singleSelect:true,collapsible:true,url:'getAllRecordsInJson.php',method:'get',remoteFilter:false">
               <?php include 'adminlist-content.php' ?> 
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
        $('#dg1').datagrid({
            view: detailview,
            detailFormatter:function(index,row){
                return '<div class="ddv"></div>';
            },
            onExpandRow: function(index,row){
                var ddv = $(this).datagrid('getRowDetail',index).find('div.ddv');
                var rows = $('#dg1').datagrid('getData').rows[index];
                ddv.panel({
                    border:false,
                    cache:false,
                    href:'data_getdetail.php?id='+rows.id,
                    onLoad:function(){
                        $('#dg1').datagrid('fixDetailRowHeight',index);
                    }
                });
                $('#dg1').datagrid('fixDetailRowHeight',index);
            }
        });

        $('#dg2').datagrid({
            view: detailview,
            detailFormatter:function(index,row){
                return '<div class="ddv"></div>';
            },
            onExpandRow: function(index,row){
                var ddv = $(this).datagrid('getRowDetail',index).find('div.ddv');
                var rows = $('#dg2').datagrid('getData').rows[index];
                ddv.panel({
                    border:false,
                    cache:false,
                    href:'data_getdetail.php?id='+rows.id,
                    onLoad:function(){
                        $('#dg2').datagrid('fixDetailRowHeight',index);
                    }
                });
                $('#dg2').datagrid('fixDetailRowHeight',index);
            }
        });

        $('#dg3').datagrid({
            view: detailview,
            detailFormatter:function(index,row){
                return '<div class="ddv"></div>';
            },
            onExpandRow: function(index,row){
                var ddv = $(this).datagrid('getRowDetail',index).find('div.ddv');
                var rows = $('#dg3').datagrid('getData').rows[index];
                ddv.panel({
                    border:false,
                    cache:false,
                    href:'data_getdetail.php?id='+rows.id,
                    onLoad:function(){
                        $('#dg3').datagrid('fixDetailRowHeight',index);
                    }
                });
                $('#dg3').datagrid('fixDetailRowHeight',index);
            }
        });

        $('#dg4').datagrid({
            view: detailview,
            detailFormatter:function(index,row){
                return '<div class="ddv"></div>';
            },
            onExpandRow: function(index,row){
                var ddv = $(this).datagrid('getRowDetail',index).find('div.ddv');
                var rows = $('#dg4').datagrid('getData').rows[index];
                ddv.panel({
                    border:false,
                    cache:false,
                    href:'data_getdetail.php?id='+rows.id,
                    onLoad:function(){
                        $('#dg4').datagrid('fixDetailRowHeight',index);
                    }
                });
                $('#dg4').datagrid('fixDetailRowHeight',index);
            }
        });

        // set a scopte i
        var i = 0;

        // open dialogs
        function opendlg(a) {
            $('#savealert').text("");
            if (a==1) {var row = $('#dg1').datagrid('getSelected');}
            if (a==2) {var row = $('#dg2').datagrid('getSelected');}
            if (a==3) {var row = $('#dg3').datagrid('getSelected');}
            if (a==4) {var row = $('#dg4').datagrid('getSelected');}
            //alert(row.id);
            i = row.id;
            if (row) {
                $('#dlg').dialog('open');
                $('#detail-form').form('load', 'data_updatedetail.php?id='+row.id); 
            } else
                alert('Please select a reviewer first');
        }


        // save updates
        function saveUpdate(){
            //alert(i);

            $('#detail-form').form('submit', {

                type: "POST",
                url: "php-saveUpdate.php?id="+i,

                onSubmit: function () {
                    return $(this).form('validate');
                },

                success: function() {
                        //$('#detail-form').dialog('close');      // close the dialog
                        //$('#dg1').datagrid('reload'); // reload the user data
                        //$('#dg2').datagrid('reload');
                        //$('#dg3').datagrid('reload');
                        //$('#dg4').datagrid('reload');
                        $('#savealert').text("Save successfully!");
                }
            });

            
        }

    
    </script>

	


