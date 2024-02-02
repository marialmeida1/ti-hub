function Start(props) {
    return (
        <div className={`bg-gradient-to-r from-emerald-600 via-violet-900 to-emerald-900 -mt-16 max-h-80 min-h-32 w-full pt-40 ${props.align}`}>
            {props.children}
        </div>
    );
}

export default Start;
