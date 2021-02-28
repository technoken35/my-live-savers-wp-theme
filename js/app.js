console.log('connected');

const getYear = () => {
  document.querySelector('.date').innerHTML = new Date().getFullYear();
};

const wHeight = window.innerHeight;

//const baseUrl = 'http://localhost:8888/';
const baseUrl = 'https://mylivesavers.com/';

const insertHeading = (el, content) => {
  const node = document.querySelector(`${el}`);

  if (node) {
    node.innerHTML = `<h2 class='text-center'>${content}</h2>`;
  }
};

const addRoundBorder = (el, roundParent) => {
  const nodes = document.querySelectorAll(`${el}`);

  nodes.forEach((el, key) => {
    if (nodes) {
      if (roundParent) {
        el.parentElement.classList.add('rounded-pill');
      }
      el.classList.add('rounded-pill');
    }
  });
};

if (window.location.href === `${baseUrl}account/?action=courses`) {
  insertHeading('#my-courses', 'Course Progress');

  /*
  document.querySelector('#courses-home').innerHTML =
    '<a href="/courses">Courses Home <span class="font-blue"><i class="fas fa-arrow-right"></i></span></a>'; Courses home */
  document.querySelector('#courses-home').classList.add('mt-5');

  document.querySelector('#courses').style.display = 'none';

  document.querySelector('#coming-soon').style.display = 'block';

  const footer = document.querySelector('footer');
  footer.style.marginTop = '17rem';
}

// set sticky footer if window height is less than 768px
if (wHeight < 768) {
  const footer = document.querySelector('footer');
  footer.style.marginTop = '12.5rem';
}

// add user icon to memberpress generated login/logout link
const el = document.querySelector('.user-icon');
console.log(el.children, 'user icon children');
let link = el.children[0];
console.log(link);
const icon = ' <i class="far fa-user"></i>';
link.innerHTML += icon;

getYear();
addRoundBorder('.user-progress', true);
