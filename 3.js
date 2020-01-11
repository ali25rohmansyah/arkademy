let data = (arg1, arg2, arg3) => {
    let getData = arg1.replace(arg1.split('{').pop().split('}')[0], "")
    getData = getData.replace(/[^a-zA-Z ]/g, "")
    let getNextValue = arg1.split('{').pop().split('}')[0]
    let sedValue = getNextValue
    if (sedValue == 0) {
        getData = getData + arg2
    } else if (sedValue == 1) {
        getData = getData + arg3
    } else {
        return getData
    }

    return getData
}

console.log(data("This is an  {0}", "Halangan", "Rintangan"))