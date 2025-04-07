var options = {Καφές: false, Αξεσουάρ:false, Άλλα:false};
function checkbox(selection){
    var items = document.getElementsByName('value');
    for(let item of items){
        if(item.innerHTML === selection){
            if(document.getElementById(selection).style.display === "none"){
                document.getElementById(selection).style.display = "flex";
                options[selection] = true;
            }
            else{
                document.getElementById(selection).style.display = "none";
                document.getElementById(selection + "_input").checked = false;
                options[selection] = false;
            }
        }
    }
    fetch(window.location.href + "filter_data", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify(options)
    }).then(response => {
        // if (!response.ok) {
        //     throw new Error('Network response was not ok');
        // }
        return response.json();
    })
    .then(data => {
        if (data.succes) {
            document.getElementById("products-main").innerHTML = data.table_view;
        }
    })
    .catch(err => {
        console.error('Error:', err);
    });
}

function filter_dropdown(){
    var div = document.getElementById("filter1_container");
    var svg = document.getElementById("filter_dropdown_btn");
    if(div.style.display !== "none"){
        div.style.display = "none";
        svg.style.transform = 'rotate(180deg)';
    }
    else{
        div.style.display = "initial";
        svg.style.transform = 'initial';
    }
}

function do_some_magic(svg_id,div_id){
    spin_the_svg(svg_id);
    add_plus_to_div(div_id);
    var uri_to_plus;
    var svg_id;
    if(div_id == 'sort_by_price_div'){
        uri_to_plus = "show_sorted?sort_type="
        svg_id = "sorting_svg1";
    }
    else if(div_id == 'sort_by_date_div'){
        uri_to_plus = "show_sorted_by_date?sort_type="
        svg_id = "sorting_svg2";
    }
        var url;
        if(document.getElementById(svg_id).style.transform == 'rotate(180deg)'){
            var url = window.location.href + uri_to_plus + encodeURIComponent('DESC');
        }else{
            var url = window.location.href + uri_to_plus + encodeURIComponent('ASC');
        }
        fetch(url)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.succes) {
                    document.getElementById("products-main").innerHTML = data.table_view;
                }
            })
            .catch(err => {
                console.error('Error:', err);
            });
    
}

function spin_the_svg(id){
    var svg = document.getElementById(id);
    if(svg.style.transform == 'rotate(180deg)'){
        svg.style.transform = 'initial';
    }
    else{
        svg.style.transform = 'rotate(180deg)';
    }
}

function add_plus_to_div(id){
    var the_div = document.getElementById(id);
    var all_divs = document.getElementsByClassName('sorting_dropdown-element');
    for(let div of all_divs){
        if(div.innerHTML[0] == '+'){
            div.innerHTML = div.innerHTML.slice(1);
        }
    }
    the_div.innerHTML = '+' + the_div.innerHTML;
}

function show_sorting_dropdown(){
    var div = document.getElementById("sorting_dropdown");

    if(div.style.display == "none"){
        div.style.display = "block";
    }
    else{
        div.style.display = "none";
    }
}

function showdropdown(){
    var div = document.getElementById("menu_dropdown");
    var svg_open = document.getElementById("header_svg_open");
    var svg_close = document.getElementById("header_svg_close");
    let width = screen.width;

if(div.style.display == "none"){
div.style.display = "flex";
svg_close.style.display = "initial";
svg_open.style.display = "none";
}
else{
div.style.display = "none";
svg_close.style.display = "none";
svg_open.style.display = "initial";
}
}

