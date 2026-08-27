const passwordInput = document.getElementById("password");
const togglePassword = document.getElementById("togglePassword");

if (passwordInput && togglePassword) {
  togglePassword.addEventListener("click", () => {
    const isPassword = passwordInput.type === "password";

    passwordInput.type = isPassword ? "text" : "password";

    togglePassword.innerHTML = isPassword
      ? '<i data-lucide="eye-off" class="h-5 w-5"></i>'
      : '<i data-lucide="eye" class="h-5 w-5"></i>';

    // Re-render the newly inserted Lucide icon
    import("lucide").then(({ createIcons, icons }) => {
      createIcons({ icons });
    });
  });
}
