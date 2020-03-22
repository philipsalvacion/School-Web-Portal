function changeCategory(category){
	var search = $("#searchBar").val();
	var category = $("#category_btn").html(category);
	searchData(search,category);
}
function searchTextbook(){
	var search = $("#searchBar").val();
	var category = $("#category_btn").html();
	searchData(search,category);
}
function searchData(search, category){
	if (search.length()>0) {
		$.post("textbook_data.php",{
			search: search,
			category: category,
			IsSearchBarEmpty: "No"
		},function(data_response){
			$("#table_body").html(data_response);
		});
	} else {
		$.post("textbook_data.php",{
			search: search,
			category: category
		},function(data_response){
			$("#table_body").html(data_response);
		});
	}
}
