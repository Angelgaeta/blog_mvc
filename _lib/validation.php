<?php

function sanitizeInput(string $formInput): string
{
  $sanitizedInput = trim($formInput);
  $sanitizedInput = stripslashes($sanitizedInput);
  $sanitizedInput = htmlspecialchars($sanitizedInput);

  return $sanitizedInput;
}

function isInputValid(string $input): bool
{
  return $input !== '';
}