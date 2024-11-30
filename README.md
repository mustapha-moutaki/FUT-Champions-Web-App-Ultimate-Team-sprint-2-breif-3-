# FUT Team Builder

## Project Overview

This app lets users build their own FIFA Ultimate Team (FUT) by adding, positioning, and managing players in different tactical formations like 4-4-2 or 4-3-3. The idea is to create an interactive experience where users can dynamically adjust their team, store player data, and see everything work seamlessly together in the app.

## Key Features

### 1. **Interactive UI and Dynamic Player Addition**
- Users can add players through a form with fields like name, position, rating, and other stats.
- Players are automatically positioned based on the selected formation (4-4-2).

### 2. **Dynamic Positioning According to Formation**
- When selecting formations like 4-4-2 or 4-3-3, players are placed in their corresponding positions, like the goalkeeper (GK), center backs (CB), and forwards (ST).
- For example, in a 4-4-2, you’ll see 1 GK, 2 CBs, 2 STs, and more, all arranged based on the selected formation.

### 3. **Managing Player Cards**
- Add, edit, and remove player cards directly in the UI.
- Each formation is restricted to a maximum of 11 players, with others stored as reserves.

### 4. **Dynamic Forms for Player Management**
- The app provides forms for adding or removing players, ensuring there’s never more than 11 players in the starting formation.
  

### 5. **LocalStorage for Data Persistence**
- Your team and formation are saved in the browser’s local storage, so you don’t lose your progress when you close the app.
- When you reload, the data is automatically loaded, so you can pick up right where you left off.

### 6. **Drag & Drop to Change Player Positions (Bonus)**
- Want to move a player? Just drag and drop them into their new position!

### 7. **Responsive Design**
- The app is fully responsive, so it looks good on any screen—whether you're on a laptop, tablet, or phone.

## Technologies Used

- **HTML** for the basic structure
- **CSS** (with Tailwind CSS) for styling and layout
- **JavaScript** (vanilla JS) for interactivity and dynamic behavior

## Getting Started

If you want to run this project locally, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/musatapha-moutaki/FUT-Team-Builder.git
