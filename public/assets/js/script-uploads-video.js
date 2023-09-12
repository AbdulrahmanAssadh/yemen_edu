//selecting all required elements
const dropArea = document.querySelector(".drag-area"),
    dragText = dropArea.querySelector("header"),
    button = dropArea.querySelector("div"),
    input = document.querySelector("#inputFile");
let file;

button.onclick = () => {
    input.click();
};

input.addEventListener("change", function () {
    file = this.files[0];
    dropArea.classList.add("active");
    showFile(); //calling function
});

//If user Drag File Over DropArea
dropArea.addEventListener("dragover", event => {
    event.preventDefault();
    dropArea.classList.add("active");
    dragText.textContent = "Release to Upload File";
});

//If user leave dragged File from DropArea
dropArea.addEventListener("dragleave", () => {
    dropArea.classList.remove("active");
    dragText.textContent = "إسحب و أفلت لرفع الملف";
});

//If user drop File on DropArea
dropArea.addEventListener("drop", event => {
    event.preventDefault();
    file = event.dataTransfer.files[0];
    showFile();
});

function showFile() {
    let fileType = file.type; //getting selected file type
    let validExtensions = ["video/mp4"]; //adding some valid image extensions in array
    if (validExtensions.includes(fileType)) {
        (document.querySelector('#name')).value = input.files[0].name.split('.')[0];
//       let fileReader = new FileReader(); //creating new FileReader object
//       fileReader.onload = () => {
//           let fileURL = fileReader.result; //passing user file source in fileURL variable
//       let videoTag = `<video id="" src="${fileURL}" controls></video>`; //creating an video tag and passing user selected file source inside src attribute
//       dropArea.innerHTML = videoTag; //adding that created img tag inside dropArea container
//
// document.querySelector('#video').src=fileURL;
//     };
        let videoTag = `<video id="" src="${URL.createObjectURL(input.files[0])}" controls></video>`; //creating an video tag and passing user selected file source inside src attribute
      // videoTag.setAttribute('src',);
        dropArea.innerHTML = videoTag; //adding that created img tag inside dropArea container

        document.querySelector('#video').src = URL.createObjectURL(input.files[0]);
        // fileReader.readAsDataURL(file);
    } else {
        alert(" أووووووووبس ! هذاالملف ليس ملف من نوع فيديو");
        dropArea.classList.remove("active");
        dragText.textContent = "إسحب و أفلت لرفع الملف";
    }
}
