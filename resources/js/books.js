import React from 'react';
import {createRoot} from 'react-dom/client';
import Books from "./components/books/Books";

const root = createRoot(document.getElementById('books'));
root.render(<Books />);
