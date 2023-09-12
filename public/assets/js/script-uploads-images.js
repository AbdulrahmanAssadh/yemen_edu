//selecting all required elements
const dropArea = document.querySelector(".drag-area"),
  dragText = dropArea.querySelector("header"),
  button = dropArea.querySelector("div"),
  // input = dropArea.querySelector("input");
    input=document.querySelector('#inputFile');
let file;

button.onclick = () => {
  input.click();
};

input.addEventListener("change", function() {
  file = this.files[0];
  dropArea.classList.add("active");
  showFile();
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
  let validExtensions = ["image/jpg","image/png", "image/jpeg"]; //adding some valid image extensions in array
  if (validExtensions.includes(fileType)) {
    let fileReader = new FileReader(); //creating new FileReader object
    fileReader.onload = () => {
      let fileURL = fileReader.result; //passing user file source in fileURL variable
      let imgTag = `<img src="${fileURL}" alt="">`; //creating an img tag and passing user selected file source inside src attribute
      dropArea.innerHTML = imgTag; //adding that created img tag inside dropArea container
    };
    fileReader.readAsDataURL(file);
  } else {
    alert("أووووووووبس ! هذاالملف ليس ملف من نوع صورة");
    console.error()
    dropArea.classList.remove("active");
    dragText.textContent = "إسحب و أفلت لرفع الملف";
  }
}
