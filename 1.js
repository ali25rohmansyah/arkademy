let biodata = (name, age) => {
    let data = {
        "name" : name,
        "age" : age,
        "address" : "Bekasi",
        "hobbies" : ["Watching", "Ngoding", "Playing Game"],
        "is_married" : false,
        "list_school" : {
            "highSchool": "MAS Al-Zaytun",
            "collage" : "Gunadarma University"
        },
        "skills" : {
            "android" : "Expert",
            "laravel": "Expert",
            "reactJs" : "advanced"
        },
        "interest_in_coding" : true
    } 

    return data
}

console.log(biodata('Ali Rohmansyah', "21"))