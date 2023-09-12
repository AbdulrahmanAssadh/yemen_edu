function ElementID(props) {
    let elementsById = {};
    props.forEach(ele => {
        elementsById[ele] = document.querySelector(`#${ele}`);
    });

    return elementsById;
}

function optionWithEvent(select, jsonData, todoOnChang) {
    for (let {id, name} of jsonData) {
        var op = document.createElement('option');
        op.setAttribute('value', id);
        op.innerText = name;
        select.appendChild(op);
    }
    if(todoOnChang!==null)
    select.addEventListener('change', todoOnChang);
}

export {ElementID, optionWithEvent};
