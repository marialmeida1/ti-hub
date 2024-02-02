function Start(props) {
    return (
        <div className={`bg-gradient-to-r from-emerald-600 via-violet-900 to-emerald-900 -mt-16 max-h-64 min-h-32 w-full ${props.align}`}>
            {props.children}
        </div>
    );
}

export default Start;
