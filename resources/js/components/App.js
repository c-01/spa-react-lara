
import React from 'react';
import NavBarComponent from './Navbar/NavBarComponent';
import CssBaseline from '@material-ui/core/CssBaseline';
import Typography from '@material-ui/core/Typography';

const App = () => {
    return (
        <React.Fragment>
            <CssBaseline />
            <Typography component="div" style={{ backgroundColor: '#cfe8fc', height: '100vh' }}>
                <NavBarComponent fs={'AppVariable'} />
            </Typography>
        </React.Fragment>
    );
}

export default App;