//Displaying image and Describtion of hotel after selection
let hotels = {
    signatureLux: {
        name: 'Signature Lux Hotel',
        price: 'R '+900,
        rating: "<span style='color: gold; font-size:25px;'>&#9734;&#9734;&#9734;</span>" ,
        describtion: "Signature Lux Hotel by ONOMO is located 5 minutes' drive from the famous V&A Waterfront and a short walk from the CTICC. The hotel features a restaurant and free WiFi is available. ",
        imageOne: 'images/signature-lux.jpg',
        imageTwo: 'images/signature-lux2.jpg',
        imageThree:'images/signature-lux3.jpg'
    },
    //hotel two
    tableBay: {
        name: 'The Table Bay Hotel',
        price: 'R ' + 4100,
        rating: "<span style='color: gold; font-size:25px;'>&#9734;&#9734;&#9734;&#9734;&#9734;</span>",
        describtion: "The Table Bay Hotel is a 5-star luxury hotel located at the V&A Waterfront in Cape Town. It features beautiful views of the working harbor, Table Mountain and the Atlantic Ocean.",
        imageOne: 'images/table-bay.jpg',
        imageTwo: 'images/table-bay2.jpg',
        imageThree: 'images/table-bay3.jpg'
    },
    //hotel three
    treeHouse: {
        name: 'The Tree House Boutique Hotel',
        price: 'R ' + 2100,
        rating: "<span style='color: gold; font-size:25px;'>&#9734;&#9734;&#9734;&#9734;&#9734;</span>",
        describtion: "Set in the suburb of Green Point in Cape Town, The Tree House Boutique Hotel features a terrace with outdoor pool and a spa. The famous V&A Waterfront is less than 1.2 mi away.",
        imageOne: 'images/the-treehouse.jpg',
        imageTwo: 'images/the-treehouse2.jpg',
        imageThree: 'images/the-treehouse3.jpg'

    },
    // hotel four
    greyHotel: {
        name: 'The Grey Hotel',
        price: 'R ' + 750,
        rating: "<span style='color: gold; font-size:25px;'>&#9734;&#9734;&#9734;</span>",
        describtion: "Offering a rooftop bar with outdoor pool, The Gray Hotel is located in the vibrant De Waterkant of Cape Town.",
        imageOne: 'images/the-gray-hotel3.jpg',
        imageTwo: 'images/the-gray-hotel.jpg',
        imageThree: 'images/the-gray-hotel2.jpg'
    }
};

let hotelSelection = document.getElementById('hotelSelection')
hotelSelection.addEventListener('change', function () {
    let selectedHotel = hotels[hotelSelection.options[hotelSelection.selectedIndex].value];
    document.getElementById('imageOne').innerHTML = ' <div class="img-holder">'+
    '<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">'+
    '<ol class = "carousel-indicators"> '+
        '<li data - target = "#carouselExampleIndicators" data-slide-to="0" class="active"></li> '
        +'<li data-target="#carouselExampleIndicators" data-slide-to= "1" >< /li>' +
        ' <li data-target = "#carouselExampleIndicators" data-slide-to="2">< /li>' +
    '</ol>' +
    '<div class="carousel-inner">'
        +'<div class="carousel-item active">' 
            +'<img class="d-block w-100" src="' + selectedHotel.imageOne + '" alt="First slide">'
        +'</div>'
        +'<div class="carousel-item">'
            +'<img class="d-block w-100" src="'+ selectedHotel.imageTwo + '" alt="Second slide">'
        +'</div>'
        +'<div class="carousel-item">'
            +'<img class = "d-block w-100" src="' + selectedHotel.imageThree + '" alt="Third slide">'
        +'</div>'
    +'</div>' 
    +'<a class ="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">'
        +'<span class="carousel-control-prev-icon" aria-hidden="true"></span>' 
        +'<span class="sr-only">< /span>'
    +'</a>'
    +'<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">'
        +'<span class = "carousel-control-next-icon" aria-hidden="true"></span>'
        +'<span class="sr-only"></span>'
    +'</a>' 
    +'</div>'+
    '</div>';

    // document.getElementById('imageTwo').innerHTML = "<img class='img-holder' src=" + selectedHotel.imageTwo + ">";
    // document.getElementById('imageThree').innerHTML = "<img class='img-holder' src=" + selectedHotel.imageThree + ">";
   
    document.getElementById('hotel-details').innerHTML = "Name: " + selectedHotel.name;
    document.getElementById('hotel-price').innerHTML = "Price: " + selectedHotel.price;
    document.getElementById('hotel-rating').innerHTML = "Rating: " + selectedHotel.rating;
    document.getElementById('hotel-describtion').innerHTML = selectedHotel.describtion;

    console.log(selectedHotel.image);

    


});
//End of Displaying image and Describtion of hotel after selection