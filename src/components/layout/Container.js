function Container(props) {
    const aligns = (value) => {
        if (value === 'center') {
            return "justify-center";
        } else {
            return 'justify-between';
        }
    }

    const alignStyles = aligns(props.align);

    return (
        <div className={`flex flex-wrap min-h-screen ${alignStyles} ${props.customClass}`}>
            {props.children}
        </div>
    );
}

export default Container;
