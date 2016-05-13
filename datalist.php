

	<link rel="stylesheet" type="text/css" href="easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="easyui/themes/icon.css">
    <!--<link rel="stylesheet" type="text/css" href="easyui/demo/demo.css">-->
    <!--<script type="text/javascript" src="easyui/jquery.min.js"></script>-->
    <!--<script type="text/javascript" src="easyui/jquery.easyui.min.js"></script>-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>

	<table class="easyui-datagrid" title="OSSLRD" style="width:auto;height:250px"
            toolbar="#toolbar" pagination="true" iconCls="icon-save" 
            rownumbers="true" data-options="remoteSort:false,singleSelect:true,collapsible:true,url:'Table.php',method:'get'">
        <thead>
            <tr>
                <th data-options="field:'id',width:80, align:'center'" sortable="true">ID</th>
                <th data-options="field:'title',width:100, align:'center'">Title</th>
                <th data-options="field:'format',width:80,align:'center'">Format</th>
                <th data-options="field:'year',width:80,align:'center'" sortable="true">Year</th>

                <th data-options="field:'author1',width:80, align:'center'">Author1</th>
                <th data-options="field:'role1',width:80,align:'center'">Role1</th>
                <th data-options="field:'affiliation1',width:80,align:'center'">Affiliation1</th>

                <th data-options="field:'author2',width:80, align:'center'">Author2</th>
                <th data-options="field:'role2',width:80,align:'center'">Role2</th>
                <th data-options="field:'affiliation2',width:80,align:'center'">Affiliation2</th>

                <th data-options="field:'author3',width:80, align:'center'">Author3</th>
                <th data-options="field:'role3',width:80,align:'center'">Role3</th>
                <th data-options="field:'affiliation3',width:80,align:'center'">Affiliation3</th>

                <th data-options="field:'author4',width:80, align:'center'">Author4</th>
                <th data-options="field:'role4',width:80,align:'center'">Role4</th>
                <th data-options="field:'affiliation4',width:80,align:'center'">Affiliation4</th>

                <th data-options="field:'author5',width:80, align:'center'">Author5</th>
                <th data-options="field:'role5',width:80,align:'center'">Role5</th>
                <th data-options="field:'affiliation5',width:80,align:'center'">Affiliation5</th>

                <th data-options="field:'country',width:80, align:'center'">Country</th>
                <th data-options="field:'conference',width:80,align:'center'">Conference</th>
                <th data-options="field:'location',width:80,align:'center'">Location</th>

                <th data-options="field:'method1',width:80, align:'center'">Method1</th>
                <th data-options="field:'method2',width:80,align:'center'">Method2</th>
                <th data-options="field:'method3',width:80,align:'center'">Method3</th>

                <th data-options="field:'source',width:80,align:'center'">Source</th>
                <th data-options="field:'abstract',width:80,align:'center'">Abstract</th>

                <th data-options="field:'class1',width:80, align:'center'">Class1</th>
                <th data-options="field:'class2',width:80,align:'center'">Class2</th>
                <th data-options="field:'class3',width:80,align:'center'">Class3</th>
            </tr>
        </thead>
    </table>

	


