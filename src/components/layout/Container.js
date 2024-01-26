function Container(props) {
    return (
        <div className="max-w-7xl flex justify-between flex-wrap min-h-screen m-10">
            {props.children}
        </div>
    );
}

export default Container;