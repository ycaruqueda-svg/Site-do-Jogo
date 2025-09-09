<!DOCTYPE html>
<html lang="pt">
<style>
    body {
  display: grid;
  place-items: center;
  margin: 0;
  height: 100vh;
  background: #1e142c;
  font-family: "Euclid Circular A", "Poppins";
  color: #f9f8fa;
  overflow: hidden;
}

* {
  box-sizing: border-box;
}

:root {
  --color-primary: #a240ff;
  --color-muted: #a392b3;
}

.background {
  position: fixed;
  z-index: -1;
  top: 70%;
  left: 50%;
  right: 0;
  bottom: -70vh;
  translate: -50% 0;
  width: 150vw;
}

svg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform: scaleY(3) scaleX(2.25);
  transform-origin: bottom;
  box-sizing: border-box;
  display: block;
  pointer-events: none;
}

.login {
  position: relative;
  z-index: 2;
  background: rgb(6 5 7 / 25%);
  backdrop-filter: blur(38px);
  box-shadow: 0 40px 30px rgb(0 0 0 / 10%);
  border-radius: 40px;
  padding: 72px 32px 58px;
  width: 380px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.login img {
  width: 74px;
  margin: 0 0 32px;
}

.login :is(h2, h3) {
  font-weight: 500;
}

.login h2 {
  font-size: 24px;
  margin: 0 0 6px;
}

.login h3 {
  color: var(--color-muted);
  font-size: 12px;
  margin: 0 0 56px;
}

.login form {
  display: grid;
  gap: 12px;
  width: 100%;
  margin: 0 0 32px;
}

.login :is(input, button) {
  height: 56px;
  font-family: inherit;
  font-size: 16px;
  padding: 0 16px;
  border: 0;
  border-radius: 8px;
}

.login .textbox {
  position: relative;
}

label,
input {
  transition: 0.3s;
}

.textbox label {
  position: absolute;
  top: 50%;
  left: 16px;
  translate: 0 -50%;
  transform-origin: 0 50%;
  pointer-events: none;
  color: var(--color-muted);
}

.textbox input {
  width: 100%;
  padding-top: 10px;
  background: #251930;
  outline: none;
  color: inherit;
  box-shadow: 0 0 0 2px transparent;
}

.textbox input:focus {
  box-shadow: 0 0 0 2px var(--color-primary);
}

.textbox input:is(:focus, :not(:invalid)) ~ label {
  scale: 0.725;
  translate: 0 -112%;
}

.login button {
  position: relative;
  color: #f9f9f9;
  font-size: 17px;
  background: var(--color-primary);
  cursor: pointer;
}

.login :is(button span, button p) {
  transition: 0.3s;
}

.login button span {
  position: absolute;
  top: 52%;
  left: 50%;
  translate: 10px -50%;
  opacity: 0;
  font-size: 22px;
}

.login button:hover p {
  translate: -10px 0;
}

.login button:hover span {
  opacity: 1;
  translate: 20px -50%;
}

.login a {
  font-size: 15px;
  color: var(--color-primary);
}

.login > p {
  margin: 56px 0 0;
  font-size: 15px;
  color: var(--color-muted);
}
</style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Animation 1</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="background">
      <svg
        version="1.1"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px"
        y="0px"
        width="100%"
        height="100%"
        viewBox="0 0 1600 900"
      >
        <defs>
          <path
            id="wave"
            fill="rgba(120, 28, 207, 0.6)"
            d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
      s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z"
          />
        </defs>
        <g>
          <use xlink:href="#wave" opacity=".4">
            <animateTransform
              attributeName="transform"
              attributeType="XML"
              type="translate"
              dur="8s"
              calcMode="spline"
              values="270 230; -334 180; 270 230"
              keyTimes="0; .5; 1"
              keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
              repeatCount="indefinite"
            />
          </use>
          <use xlink:href="#wave" opacity=".6">
            <animateTransform
              attributeName="transform"
              attributeType="XML"
              type="translate"
              dur="6s"
              calcMode="spline"
              values="-270 230;243 220;-270 230"
              keyTimes="0; .6; 1"
              keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
              repeatCount="indefinite"
            />
          </use>
          <use xlink:href="#wave" opacty=".9">
            <animateTransform
              attributeName="transform"
              attributeType="XML"
              type="translate"
              dur="4s"
              calcMode="spline"
              values="0 230;-140 200;0 230"
              keyTimes="0; .4; 1"
              keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
              repeatCount="indefinite"
            />
          </use>
        </g>
      </svg>
    </div>
    <div class="login">
      <img src="logo.svg" />
      <h2>Welcome to Jolt</h2>
      <h3>Lightning quick development!</h3>
      <form class="form">
        <div class="textbox">
          <input required type="text" />
          <label>Email</label>
        </div>
        <div class="textbox">
          <input required type="password" />
          <label>Password</label>
        </div>
        <button type="submit">
          <p>Login</p>
          <span class="material-symbols-outlined">arrow_forward</span>
        </button>
      </form>
      <a>Forgot password?</a>
      <p class="footer">Not a member yet? <a>Sign up!</a></p>
    </div>
  </body>
</html>