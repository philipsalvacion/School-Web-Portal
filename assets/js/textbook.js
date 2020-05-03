function changeCategory(categories){
	var search = $("#searchBar").val();
	$("#category_btn").html(categories);
	searchData(search,$("#category_btn").html(categories));
}
function searchTextbook(){
	var search = $("#searchBar").val();
	var category = $("#category_btn").html();
	searchData(search,category);
}
function searchData(search, category){
	if (search.length > 0) {
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
