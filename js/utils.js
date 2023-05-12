const totalHarga = (dataList) => {
    let total = 0;
    
    if (dataList.length == 0) {
        return 0
    }

    dataList.map((val) => {
        total += val.menu_price;
    })

    return total
}

const similiar = (dataCheck, sim) => {
    for (let index = 0; index < dataCheck.length; index++) {
        const element = dataCheck[index];

        if (element.menu_name === sim.menu_name) {
            return true;
        }
    }

    return false;
}

const priceInK = (price) => {
    var strPrice = price.toString();
    var priceRtn = strPrice.slice(0,2) + "K"

    return priceRtn;
}