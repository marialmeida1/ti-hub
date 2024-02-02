function Container(props) {
    return (
        <div className="flex justify-between flex-wrap min-h-screen">
            {props.children}
        </div>
    );
}

export default Container;