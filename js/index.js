function mouseFunc(){
    const img = document.getElementById("image1");
    img.classList.add("dark-bg");
    console.log("jhjh");
    const data = document.getElementById("data");
    data.classList.remove("hide-data")
    data.classList.add("show-hidden-data");
}

function mouseOut(){
    const img = document.getElementById("image1");
    img.classList.remove("dark-bg");
    console.log("uuu");
    const data = document.getElementById("data");
    data.classList.remove("show-hidden-data");
    data.classList.add("hide-data")
}

