$(onReadyAlone);
function onReadyAlone(){
	table = $("#table").DataTable(conf());
}
function conf(){
	
  var conf = {
    serverSide: true,
    pagingType: "full_numbers",
    iDisplayLength: 10,
    "bSort":true,
    'asSorting':'desc',
    "lengthMenu": [[10, 20, 50], [10, 20, 50]],
    ajax: {
      url: '/tm/alonelist',
    },
    "columnDefs": [
      {"className": "dt-left", "targets": 0},
      {"className": "dt-center", "targets": "_all"}
    ],
    columns:[
      {
	data: null,
	width: '72px',
	orderable: false,
	"render": function ( data, type, full, meta ) {
	  var html = '<a class="edit" href="/tm/alone/'+data.id+'/edit">编辑</a>';
	  return html;
	}
      },
      {data: 'id', width: '16px',"bSort":true,"asSorting":"desc"},
      {data: 'content'},
      {data: 'author'},
    ],
 };

  return conf;
}

