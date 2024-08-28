let BlogForm = document.getElementById('BlogForm');

function ConfirmClear(){
  var ClearText = window.confirm('Are you sure you want to clear?');
  if (ClearText == true) {
    document.getElementById("BlogForm").reset();
  }
}

function submitForm(e){

  e.preventDefault();

  let UserBlogTitle = document.getElementById('BlogTitle').value;
  let UserBlogText = document.getElementById('BlogText').value;
  console.log(UserBlogTitle);
  console.log(UserBlogText);

  let BlankCheckTitle = CheckTextLength(document.getElementById('BlogTitle'));

  let BlankCheckText = CheckTextLength(document.getElementById('BlogText'));

  if (BlankCheckTitle && BlankCheckText) {
    console.log(BlankCheckTitle && BlankCheckText);
    document.getElementById('BlogForm').submit();
  }
  console.log(BlankCheckTitle && BlankCheckText);
  if (BlankCheckTitle == false) {
    var input = document.getElementById('BlogTitle');
    input.placeholder = 'Must be filled in';
    input.style.borderColor = "#d90000";
  }

  if (BlankCheckTitle == true) {
    var input = document.getElementById('BlogTitle');
    input.placeholder = 'Enter your text here';
    input.style.borderColor = "navy";
  }

  if (BlankCheckText == false) {
    var input = document.getElementById('BlogText');
    input.placeholder = 'Must be filled in';
    input.style.borderColor = "#d90000";
  }

  if (BlankCheckText == true) {
    var input = document.getElementById('BlogText');
    input.placeholder = 'Enter your text here';
    input.style.borderColor = "navy";
  }
}

function CheckTextLength(textInputted)
   {
     if (textInputted.value.length <= 0)
      {
         return false;
      }
      return true;
    }

BlogForm.addEventListener('submit', submitForm);
