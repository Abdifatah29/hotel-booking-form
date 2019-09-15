//Displaying image and Describtion of hotel after selection
let hotels = {
    signatureLux: {
        name: 'Signature Lux Hotel',
        price: 'R '+900,
        rating: "<span style='color: gold; font-size:25px;'>&#9734;&#9734;&#9734;</span>" ,
        describtion: "Signature Lux Hotel by ONOMO is located 5 minutes' drive from the famous V&A Waterfront and a short walk from the CTICC. The hotel features a restaurant and free WiFi is available. ",
        image: 'http://placehold.it/400x400'
    },

    tableBay: {
        name: 'The Table Bay Hotel',
        price: 'R ' + 4100,
        rating: "<span style='color: gold; font-size:25px;'>&#9734;&#9734;&#9734;&#9734;&#9734;</span>",
        describtion: "The Table Bay Hotel is a 5-star luxury hotel located at the V&A Waterfront in Cape Town. It features beautiful views of the working harbor, Table Mountain and the Atlantic Ocean.",
        image: 'http://placehold.it/400x400'
    },

    treeHouse: {
        name: 'The Tree House Boutique Hotel',
        price: 'R ' + 2100,
        rating: "<span style='color: gold; font-size:25px;'>&#9734;&#9734;&#9734;&#9734;&#9734;</span>",
        describtion: "Set in the suburb of Green Point in Cape Town, The Tree House Boutique Hotel features a terrace with outdoor pool and a spa. The famous V&A Waterfront is less than 1.2 mi away.",
        image: 'http://placehold.it/400x400'
    },

    greyHotel: {
        name: 'The Grey Hotel',
        price: 'R ' + 750,
        rating: "<span style='color: gold; font-size:25px;'>&#9734;&#9734;&#9734;</span>",
        describtion: "Offering a rooftop bar with outdoor pool, The Gray Hotel is located in the vibrant De Waterkant of Cape Town.",
        image: 'http://placehold.it/400x400'
    }
};

let hotelSelection = document.getElementById('hotelSelection')
hotelSelection.addEventListener('change', function () {
    let selectedHotel = hotels[hotelSelection.options[hotelSelection.selectedIndex].value];
    document.getElementById('hotel-image').innerHTML = "<img src=" + selectedHotel.image + "/>";
    document.getElementById('hotel-details').innerHTML = "Name: " + selectedHotel.name;
    document.getElementById('hotel-price').innerHTML = "Price: " + selectedHotel.price;
    document.getElementById('hotel-rating').innerHTML = "Rating: " + selectedHotel.rating;
    document.getElementById('hotel-describtion').innerHTML = selectedHotel.describtion;

    


});
//End of Displaying image and Describtion of hotel after selection