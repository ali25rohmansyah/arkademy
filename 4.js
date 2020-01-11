let find = () => {
    let same = [], notSame = [], refs = [], output;
    let inputs = ['cat', 'listen', 'code', 'act', 'silent', 'tac', 'try', 'fire', 'dark', ''];
    let sorting = inputs.map(function (item) {
        return item.split('').sort().join('');
    });

    for (let i = 0; i < sorting.length - 1; i++) {
        let ref = sorting[i];
        if (refs.indexOf(ref) == -1) {
            refs.push(ref);
            let intResult = [inputs[i]];
            for (let j = i + 1; j < sorting.length; j++) {
                if (sorting[j] == ref) {
                    intResult.push(inputs[j]);
                }
            }
            if (intResult.length > 1) {
                same.push(intResult);
            } else {
                notSame.push(inputs[i]);
            }
        }
    }

    output = same
    if (notSame) {
        output = output + "\nTidak ditemukan"
    }
    return output
}

console.log(find())
